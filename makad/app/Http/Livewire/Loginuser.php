<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Loginuser extends Component
{
    public $phone_number;
    public $password;

    public function save()
    {
        $this->validate([
            'phone_number' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt(['phone_number' => $this->phone_number, 'password' => $this->password])){
            $this->dispatchBrowserEvent('alert', ['type' => 'success',  'message' => 'Login successful']);
        }
        else{

            $this->dispatchBrowserEvent('alert', ['type' => 'error',  'message' => 'Incorrect phone number or password']);

            return redirect()->back();
        }


        return redirect(route('home'));

    }

    public function render()
    {
        return view('livewire.loginuser');
    }
}
