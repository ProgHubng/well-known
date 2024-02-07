<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Logout extends Component
{
    public function logout()
    {
        Auth::logout();
        Session::flush();

        $this->dispatchBrowserEvent('alert', ['type' => 'success',  'message' => 'Logout successful']);
        return redirect('/');
    }

    public function render()
    {
        return view('livewire.logout');
    }
}
