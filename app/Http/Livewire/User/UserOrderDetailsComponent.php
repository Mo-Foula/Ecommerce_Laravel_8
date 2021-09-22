<?php

namespace App\Http\Livewire\User;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserOrderDetailsComponent extends Component
{   public $order_id;
    public function mount($order_id)
    {
        $this->order_id = $order_id;
    }
    public function render()
    {
        $orders=Order::where('user_id',Auth::user()->id)->where('id',$this->order_id)->first();
        // // $orders=Order::where('user_id',Auth::user()->id)->paginate(12);
        return view('livewire.user.user-order-details-component',['orders'=>$orders])->layout('layouts.base');

    }
}
