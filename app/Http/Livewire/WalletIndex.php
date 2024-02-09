<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Transaction;
class WalletIndex extends Component
{
    public $wallet;
    // public $withdrawals;
    public $user;
    // public $product;
    // public $dailyIncome;
    public $transactions;


    public function mount()
    {

        // dd('mount executed');
        // Fetch user's wallet details
        $this->wallet = auth()->user()->wallet;
        $this->user = auth()->user(); // Fetch user data

        $this->transactions = Transaction::where('user_id', $this->user->id)
            ->orderBy('created_at', 'desc')
            ->take(10) // Change this to the number of recent transactions you want to display
            ->get();


    }
    public function render()
    {

        return view('livewire.wallet.wallet-index', [
            'wallet' => $this->wallet,
            'transaction' => $this->transactions,
        ]);

    }

    protected $debug = true;


// public function hydrate()
// {
//     dd('hydrate executed');
//     // ... existing code
// }
}
