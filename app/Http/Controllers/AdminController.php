<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Purchased_plan;
use App\Models\Referral_bonus;
use App\Models\User;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $total_users = User::count();
        $plans = Plan::count();
        $total_dep = Purchased_plan::where('status', 'success')->sum('price');
        $total_with = Withdrawal::where('status','success')->sum('amount');

        $deposits = Purchased_plan::orderBy('id', 'DESC')->get()->take(8);
        return view("admin.home", compact('total_users','total_dep','total_with','plans','deposits'));
    }

    public function deppaid(int $id)
    {
        $recharge = Purchased_plan::find($id);
        $recharge->status = 'success';
        $recharge->save();

        $amount = $recharge->price;

        $user = User::where('id', $recharge->user_id)->first();

        if ($user) {

            if ($user->referral_id != NULL) {
                $lvone = User::where('id', $user->referral_id)->first();

                if ($lvone) {
                    $bonus = 30/100*$amount;
                    $lvone->wallet->balance += $bonus;
                    $lvone->save();

                    $ref_bonus = new Referral_bonus;
                    $ref_bonus->user_id = $user->id;
                    $ref_bonus->referral_user_id = $user->referral_id;
                    //$ref_bonus->level = 1;
                    $ref_bonus->recharged_amount = $amount;
                    $ref_bonus->level_percentage = 30;
                    $ref_bonus->bonus_amount = $bonus;
                    $ref_bonus->save();
                }

            }

            // if ($user->level2_referral_id != NULL) {
            //     $lvone = User::where('id', $user->level2_referral_id)->first();

            //     if ($lvone) {
            //         $bonus = 1/100*$amount;
            //         $lvone->balance += $bonus;
            //         $lvone->save();

            //         $ref_bonus = new Referral_bonus;
            //         $ref_bonus->user_id = $user->id;
            //         $ref_bonus->referral_user_id = $user->level1_referral_id;
            //         $ref_bonus->level = 2;
            //         $ref_bonus->recharged_amount = $amount;
            //         $ref_bonus->level_percentage = 1;
            //         $ref_bonus->bonus_amount = $bonus;
            //         $ref_bonus->save();
            //     }

            // }

            // if ($user->level3_referral_id != NULL) {
            //     $lvone = User::where('id', $user->level3_referral_id)->first();

            //     if ($lvone) {
            //         $bonus = 1/100*$amount;
            //         $lvone->balance += $bonus;
            //         $lvone->save();

            //         $ref_bonus = new Referral_bonus;
            //         $ref_bonus->user_id = $user->id;
            //         $ref_bonus->referral_user_id = $user->level1_referral_id;
            //         $ref_bonus->level = 3;
            //         $ref_bonus->recharged_amount = $amount;
            //         $ref_bonus->level_percentage = 1;
            //         $ref_bonus->bonus_amount = $bonus;
            //         $ref_bonus->save();
            //     }

            // }


        }

    return redirect()->back();
    }

    public function depfail(int $id)
    {
        $recharge = Purchased_plan::find($id);
        $recharge->status = 'fail';
        $recharge->save();


        return redirect()->back();
    }

    public function users()
    {
        $user = User::orderBy('id','DESC')->get();
        return view('admin.users',compact('user'));
    }

    public function edituser(int $id)
    {
        $user = User::find($id);
        if ($user) {
            return view('admin.edituser', compact('user'));
        }

    }

    public function storeuser(Request $request)
    {
        $user = User::find($request->id);
        $user->balance = $request->balance;
        if ($request->password != '') {
            $user->password = Hash::make($request->password);
        }
        $user->save();
        return redirect('admin/users');
    }

    public function plans()
    {
        $plan = Plan::orderBy('id','DESC')->get();
        return view('admin.plans',compact('plan'));
    }

    public function addplans()
    {
        return view('admin.addplan');
    }

    public function storeplan(Request $request)
    {
        $plan = new Plan;
        $plan->name = $request->name;

        if ($request->hasFile('image')) {
            $image          = $request->file('image');
            $newImageName   = sha1(time()).'.'.$image->getClientOriginalExtension();
            $location       = public_path('uploads/plan/');
            $image->move($location, $newImageName);

            $plan->image = $newImageName;
        }

        $plan->price = $request->price;
        $plan->daily_income = $request->daily_income;
        $plan->valid = $request->duration;
        $plan->save();

        return redirect('admin/plans');
    }

    public function editplan(int $id)
    {
        $plan = Plan::find($id);
        if ($plan) {
            return view('admin.editplan', compact('plan'));
        }

    }

    public function updateplan(Request $request)
    {
        $plan = Plan::find($request->id);
        $plan->name = $request->name;

        if ($request->hasFile('image')) {
            $image          = $request->file('image');
            $newImageName   = sha1(time()).'.'.$image->getClientOriginalExtension();
            $location       = public_path('uploads/plan/');
            $OldImage       = public_path('uploads/plan/'.$plan->image);
            $image->move($location, $newImageName);

            //unlink($OldImage);

            $plan->image = $newImageName;
        }

        $plan->price = $request->price;
        $plan->daily_income = $request->daily_income;
        $plan->valid = $request->duration;
        $plan->save();

        return redirect('admin/plans');
    }

    public function deposits(){

        $deposits = Purchased_plan::orderBy('id', 'DESC')->get();
        return view("admin.deposits", compact('deposits'));
    }

    public function withdrawals(){

        $withdrawals = Withdrawal::orderBy('id', 'DESC')->get();
        return view("admin.withdrawals", compact('withdrawals'));
    }

    public function withfail(int $id)
    {
        $withdrawal = Withdrawal::find($id);
        $withdrawal->status = 'failed';
        $result = $withdrawal->save();

        if ($result) {
            $withdrawal->user->balance += $withdrawal->amount;
            $withdrawal->user->save();
        }

        return redirect()->back();
    }

    public function withpaid(int $id)
    {
        $withdrawal = Withdrawal::find($id);
        $withdrawal->status = 'success';
        $withdrawal->save();

        return redirect()->back();
    }

}