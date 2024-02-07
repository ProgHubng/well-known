<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Purchased_plan;
use Illuminate\Support\Facades\Auth;

class Deposits extends Component
{
    public function render()
    {
        $user = Auth::user();
        $deposit = Purchased_plan::where('user_id', $user->id)->get();

        return view('livewire.deposits', compact('deposit','user'));
    }
}
