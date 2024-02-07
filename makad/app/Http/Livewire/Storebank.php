<?php


namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Storebank extends Component
{
    public $account_name;
    public $account_number;
    public $bank_name;

    public function save()
    {
        $this->validate([
            'account_name' => 'required|string',
            'account_number' => 'required|string',
            'bank_name' => 'required|string',
        ]);

        $user = Auth::user();
        $user->account_name = $this->account_name;
        $user->account_number = $this->account_number;
        $user->bank_name = $this->bank_name;
        $user->save();

        $this->dispatchBrowserEvent('alert', ['type' => 'success',  'message' => 'Bank details added successfully']);



    }

    public function render()
    {
        return view('livewire.storebank');
    }
}
