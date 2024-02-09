<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Middleware\CheckReferral;
use Illuminate\Support\Facades\Cookie;

class Storeuser extends Component
{
    public $phone_number;
    public $password;

    public function save()
    {
        $this->validate([
            'phone_number' => 'required|string|max:11|unique:users',
            'password' => 'required'
        ]);

        $referred_by = Cookie::get('referral');

        $user = new User;
        $user->phone_number = $this->phone_number;
        $user->password = Hash::make($this->password);
        $user->my_refer_code = random_int(100, 9999999);
        $user->referral = $referred_by;

        $user->wallet->balance += 100;  //welcome bonus
        $user->earn += 100; //total income
        $result = $user->save();

        if ($result) {
            if (User::where('my_refer_code', $referred_by)->count() > 0) {
                $lv_one = User::where('my_refer_code', $referred_by)->first();
                $auth = User::where('phone_number', $this->phone_number)->first();
                $auth->referral_id = $lv_one->id;
                $result = $auth->save();               
            }
        }

        Auth::login($user);

        $this->dispatchBrowserEvent('alert', ['type' => 'success',  'message' => 'Registration successful']);

        return redirect(route('home'));
    }

    public function render()
    {
        return view('livewire.storeuser');
    }
}