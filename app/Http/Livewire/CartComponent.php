<?php

namespace App\Http\Livewire;

use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Cart;
use phpDocumentor\Reflection\Types\Null_;

class CartComponent extends Component
{

    public function increaseQuantity($rowId)
    {
        $product=Cart::get($rowId);
        $qty=$product->qty + 1;
        Cart::update($rowId,$qty);

    }
    public function decreaseQuantity($rowId)
    {
        $product=Cart::get($rowId);
        $qty=$product->qty - 1;
        Cart::update($rowId,$qty);
    }

    public function deleteFromCart($rowId)
    {
        Cart::remove($rowId);
        session()->flash('success_message','Item has been removed');
    }
    public function deleteAll()
    {
        Cart::destroy();

    }
    public function checkout(){
        $items = Cart::content();
        $last_item = OrderItem::latest()->first();
        $nextOderId = $last_item == Null?1:$last_item->order_id+1;
        foreach ($items as $item){
            $order = new OrderItem();
            $order->order_id = $nextOderId;
            $order->product_id = $item->model->id;
            $order->price = $item->subtotal;
            $order->quantity = $item->qty;
            $order->user_id = Auth::user()->id;
            $order->save();
        }

        $this->deleteAll();
        return redirect()->to('thanks');
    }
    public function render()
    {
        return view('livewire.cart-component')->layout("layouts.base");
    }
}
