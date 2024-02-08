<?php

namespace App\Http\Livewire;

use Livewire\Component;
class WalletIndex extends Component
{
    public $wallet;
    // public $withdrawals;
    public $user;
    // public $product;
    // public $dailyIncome;



    public function mount()
    {

        // dd('mount executed');
        // Fetch user's wallet details
        $this->wallet = auth()->user()->wallet;
        $this->user = auth()->user(); // Fetch user data




    }
    public function render()
    {
        // dd($this->transactions);
        return view('livewire.wallet.wallet-index', [
            'wallet' => $this->wallet,
            

        ]);
    }

    protected $debug = true;


// public function hydrate()
// {
//     dd('hydrate executed');
//     // ... existing code
// }
}
