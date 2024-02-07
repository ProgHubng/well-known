<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Withdrawal;
use Illuminate\Support\Facades\Auth;

class Withdrawstore extends Component
{
    public $amount;

    public function save()
    {
        $this->validate([
            'amount' => 'required|min:1|integer'
        ]);

        if (auth()->user()->account_number == NULL) {
            $this->dispatchBrowserEvent('alert', ['type' => 'error',  'message' => "You must bind your bank account to withdraw money first." ]);
            return redirect()->back();
        }

        if (auth()->user()->balance < $this->amount) {
            $this->dispatchBrowserEvent('alert', ['type' => 'error',  'message' => "insufficient balance"]);
            return redirect()->back();
        }

        if ($this->amount < 1000) {

            $this->dispatchBrowserEvent('alert', ['type' => 'error',  'message' => "The minimum amount is ₦1000" ]);
            return redirect()->back();
        }

        $user = Auth::user();
        $user->balance -= $this->amount;
        $result = $user->save();

        if ($result) {
            $withdraw = new Withdrawal;
            $withdraw->user_id = Auth()->user()->id;
            $withdraw->amount = $this->amount;
            $withdraw->status = 'pending';
            $withdraw->save();

        }

        $this->dispatchBrowserEvent('alert', ['type' => 'success',  'message' => "Withdrawal successful" ]);

    }


    public function render()
    {
        return view('livewire.withdrawstore');
    }
}
