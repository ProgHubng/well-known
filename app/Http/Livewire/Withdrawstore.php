<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Transaction;
use App\Models\Withdrawal;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Withdrawstore extends Component
{
    public $amount;
    public $user;

    public function save()
    {
        $this->validate([
            'amount' => 'required|min:1|integer'
        ]);

        $user = Auth::user();
        // dd($user);

        if ($user->account_number == null) {
            return $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => "You must bind your bank account to withdraw money first."]);
        }

        if ($user->balance < $this->amount) {
            return $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => "Insufficient balance"]);
        }

        if ($this->amount < 1000) {
            return $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => "The minimum amount is ₦1000"]);
        }

        // Begin a database transaction
        DB::beginTransaction();

        try {
            // Update user balance
            $user->wallet->balance -= $this->amount;
            // $user->save();

            // Save withdrawal record
            $withdraw = new Withdrawal;
            $withdraw->user_id = $user->id;
            $withdraw->amount = $this->amount;
            $withdraw->status = 'pending';
            $withdraw->save();

            // Save transaction record
            $transaction = new Transaction;
            $transaction->user_id = $user->id;
            $transaction->amount = $this->amount;
            $transaction->type = 'withdrawal';
            $transaction->status = 'pending';
            $transaction->save();

            // Commit the transaction
            DB::commit();

            return $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => "Withdrawal successful"]);
        } catch (\Exception $e) {
            // Rollback the transaction in case of an exception
            DB::rollback();

            return $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => "Error processing withdrawal"]);
        }
    }

    public function render()
    {
        return view('livewire.withdrawstore');
    }
}
