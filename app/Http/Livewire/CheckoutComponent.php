<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;
class CheckoutComponent extends Component
{
    public function deleteAll()
    {
        Cart::destroy();
        
    }
    public function render()
    {
        return view('livewire.checkout-component')->layout('layouts.base');
    }
}
