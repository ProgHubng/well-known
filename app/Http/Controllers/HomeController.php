<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;


use App\Models\User;
use App\Models\Wallet;
use App\Models\Plan;
use App\Models\Purchased_plan;
use Illuminate\Http\Request;
use App\Models\Referral_bonus;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{

    public function checkReferralCount()
    {
        $referralCount = User::where('referral_id', auth()->user()->id)->count();
        return response()->json(['ReferralCount' => $referralCount]);
    }

    public function checkProductValidity()
    {
        $user = auth()->user();
        $planId = request()->input('plan_id');

        $referralCount = User::where('referral_id', $user->id)->count();

        $product = Plan::find($planId);
        var_dump($product, $planId);
        $isProductValid = $product && (
        ($product->price >= 100000 && $product->price <= 199000 && $referralCount == 3) ||
        ($product->price >= 200000 && $product->price <= 399000 && $referralCount == 5) ||
        ($product->price >= 400000 && $referralCount == 10) ||
        ($product->price < 99000 && $referralCount >=0 )
        );

        Log::info('User ID: ' . $user->id);
        Log::info('Referral Count: ' . $referralCount);
        Log::info('Product ID: ' . $planId);
        Log::info('Product Validity: ' . ($isProductValid ? 'true' : 'false'));

        return response()->json(['isProductValid' => $isProductValid]);
    }


    public function downline(int $id)
    {
        $downline = Referral_bonus::where('user_id', auth()->user()->id)->where('level', $id)->get();
        return view('livewire.downlines', compact('downline', 'id'));
    }

    public function payment(int $id)
    {
        $user = Auth::user();
        $plan = Plan::where('id', $id)->first();
        return view('livewire.payment', compact('plan', 'user'));    }

    public function __construct()
    {
        // Apply the EnsureWallet middleware to the entire controller
        $this->middleware('ensure.wallet');
    }

    // ... Other methods ...

    private function ensureUserHasWallet(Request $request)
    {
        $user = $request->user();

        if ($user && !$user->wallet) {
            // Create a wallet for the user if it doesn't exist
            $wallet = $user->wallet()->create(['balance' => 0.00]);

            // Log wallet creation
            Log::info('Wallet created for User ID: ' . $user->id . ' with Wallet ID: ' . $wallet->id);
        }
    }

  public function walletIndex()
    {
          // Fetch user's wallet details
    $wallet = auth()->user()->wallet;

        // Your logic for displaying wallet information on the index page
        // return view('wallet.index', compact('wallet'));
        return view('livewire.wallet.wallet-index', compact('wallet'));

    }

    public function walletDeposit(Request $request)
    {
        // Validate the deposit request
        $request->validate([
            'amount' => 'required|numeric|min:0.01',
        ]);

        // Perform the deposit action
        $user = auth()->user();
        $user->wallet->increment('balance', $request->amount);

        // Your logic for recording the deposit transaction or displaying success messages
        return redirect()->route('wallet.index')->with('success', 'Deposit successful!');
    }

    public function walletWithdraw(Request $request)
    {
        // Validate the withdrawal request
        $request->validate([
            'amount' => 'required|numeric|min:0.01|max:' . auth()->user()->wallet->balance,
        ]);

        // Perform the withdrawal action
        $user = auth()->user();
        $user->wallet->decrement('balance', $request->amount);

        // Your logic for recording the withdrawal transaction or displaying success messages
        return redirect()->route('wallet.index')->with('success', 'Withdrawal successful!');
    }

    public function storepayment(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $plan = Plan::where('id', $request->plan_id)->first();
            $expire_date = Carbon::now()->addDay();
            $start_date = Carbon::now();

            if ($plan) {
                if ($request->hasFile('proof')) {
                    $image          = $request->file('proof');
                    $newImageName   = sha1(time()) . '.' . $image->getClientOriginalExtension();
                    $location       = public_path('uploads/plan/');
                    $image->move($location, $newImageName);

                    // Calculate daily income based on the purchased plan
                    $dailyIncome = ($plan->price * 0.4) / $plan->vaild;

                    Purchased_plan::create([
                        'user_id' => auth()->user()->id,
                        'plan_id' => $plan->id,
                        'daily_income' => $dailyIncome, // Updated calculation here
                        'price' => $plan->price,
                        'status' => 'pending',
                        'start_date' => $start_date,
                        'end_date' => $expire_date,
                        'proof' => $newImageName,
                        'bank' => $request->bank,
                        'account_no' => $request->account_no,
                        'account_name' => $request->account_name,
                    ]);

                    // Check if the user has a referrer
                    if ($user->referrer) {
                        $referrer = $user->referrer;

                        // Calculate 5% referral bonus
                        $referralBonusAmount = $dailyIncome * $plan->vaild * 0.05;

                        // Update the referrer's balance
                        $referrer->update([
                            'balance' => $referrer->balance + $referralBonusAmount,
                        ]);

                        // Create a referral bonus record
                        Referral_bonus::create([
                            'user_id' => $referrer->id,
                            'referred_user_id' => $user->id,
                            'plan_id' => $plan->id,
                            'bonus_amount' => $referralBonusAmount,
                        ]);
                    }
                }
                return redirect('/deposits');
            }
        }
    }

}
