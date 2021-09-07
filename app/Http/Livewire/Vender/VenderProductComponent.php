<?php

namespace App\Http\Livewire\Vender;

use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class VenderProductComponent extends Component
{
    use WithPagination;

    public function deleteProduct($id)
    {
        $product = Product::find($id);
        $product->delete();
        session()->flash('message', 'Product has been deleted sucessfully!');
    }

    public function render()
    {
        $vend_id = Auth::user()->id;
        $products = Product::where('vendor_id', $vend_id)->paginate(10);
        return view('livewire.vender.vender-product-component', ['products' => $products])->layout('layouts.base');

    }
}
