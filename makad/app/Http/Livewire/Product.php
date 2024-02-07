<?php

namespace App\Http\Livewire;

use App\Models\Plan;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Product extends Component
{


    public function render()
    {
        $user = Auth::user();
        $product = Plan::all();

        return view('livewire.product', compact('product','user'));
    }
}
