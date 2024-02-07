<?php

namespace App\Http\Livewire;

use App\Models\Withdrawal;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Withdraw extends Component
{
    public function render()
    {
        $user = Auth::user();
        $withdrawal = Withdrawal::where('user_id', $user->id)->get();

        return view('livewire.withdraw', compact('user','withdrawal'));
    }
}
