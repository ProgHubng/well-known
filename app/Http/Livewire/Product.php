<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Plan;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Product extends Component
{
    public $user;
    public $product29;
    public $product30;
    public $product31;
    public $referralCount;

    public function getProductsByValid($valid)
    {
        return Plan::where('valid', $valid)->get();
    }

    public function mount()
    {
        $this->user = Auth::user();
        $this->product29 = $this->getProductsByValid(29);
        $this->product30 = $this->getProductsByValid(30);
        $this->product31 = $this->getProductsByValid(31);

        // Fetch referral count for the authenticated user
        $this->referralCount = User::where('referral_id', $this->user->id)->count();
    }

    public function render()
    {
        return view('livewire.product', [
            'user' => $this->user,
            'product29' => $this->product29,
            'product30' => $this->product30,
            'product31' => $this->product31,
            'referralCount' => $this->referralCount,
        ]);
    }
    public function purchaseProduct($productId)
    {
        // Check conditions for purchasing the product based on $productId and $this->referralCount
        // Add your purchase logic here
        // If conditions are not met, show an error message
        if (!$this->isPurchaseAllowed($productId)) {
            session()->flash('error', 'Error: The conditions for purchasing this product are not met.');
        } else {
                        // Redirect to the specified URL after a successful purchase
            return redirect()->to('buy/' . $productId);
        }
    }

    private function isPurchaseAllowed($productId)
    {
        $item = Plan::find($productId);

        if ($item) {
            if ($item->price >= 100000 && $item->price <= 199000 && $this->referralCount == 3) {
                // Add purchase logic for this condition
                return true;
            } elseif ($item->price >= 200000 && $item->price <= 399000 && $this->referralCount >= 5) {
                // Add purchase logic for this condition
                return true;
            } elseif ($item->price >= 400000 && $this->referralCount >= 10) {
                // Add purchase logic for this condition
                return true;
            } elseif ($item->price <= 99000 && $this->referralCount >= 0) {
                // Add purchase logic for this condition
                return true;
            } else {
                // Conditions not met, show an error message
                session()->flash('error', 'Error: The conditions for purchasing this product are not met.');
                return false;
            }
        }

        // Handle the case when the product is not found
        session()->flash('error', 'Error: Product not found.');
        return false;
    }

}
