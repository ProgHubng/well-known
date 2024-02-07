<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Profile extends Component
{
    public function render()
    {
        $user = Auth::user();
        return view('livewire.profile', compact('user'));
    }
}
