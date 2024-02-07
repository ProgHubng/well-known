<?php

namespace App\Http\Livewire;

use App\Models\Purchased_plan;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Order extends Component
{
    public function render()
    {
        $user = Auth::user();
        $order = Purchased_plan::where('user_id', auth()->user()->id)->where('user_id', auth()->user()->id)->where('status', 'success')->get();
        return view('livewire.order', compact('user','order'));
    }
}