<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Purchased_plan;
use Illuminate\Http\Request;
use App\Models\Referral_bonus;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function downline(int $id )
    {
        $downline = Referral_bonus::where('user_id', auth()->user()->id)->where('level', $id)->get();
        return view('livewire.downlines', compact('downline', 'id'));
    }

    public function payment(int $id)
    {
        $user = Auth::user();
        $plan = Plan::where('id', $id)->first();
        return view('livewire.payment', compact('plan', 'user'));
    }

    public function storepayment(Request $request)
    {
        if (Auth::check()) {

            $user = Auth::user();
            $plan = Plan::where('id', $request->plan_id)->first();
            $expire_date = Carbon::now()->addDay(30);
            $start_date = Carbon::now();

            if($plan)
            {

                if ($request->hasFile('proof')) {
                    $image          = $request->file('proof');
                    $newImageName   = sha1(time()).'.'.$image->getClientOriginalExtension();
                    $location       = public_path('uploads/plan/');
                    $image->move($location, $newImageName);
                    
                    Purchased_plan::create([
                    'user_id' => auth()->user()->id,
                    'plan_id' => $plan->id,
                    'daily_income' => $plan->daily_income,
                    'price' => $plan->price,
                    'status' => 'pending',
                    'start_date' => $start_date,
                    'end_date' => $expire_date,
                    'proof' => $newImageName,
                    'bank' => $request->bank,
                    'account_no' => $request->account_no,
                    'account_name' => $request->account_name


                ]);
                }

                


                return redirect('/deposits');
            }


        }
    }
}
