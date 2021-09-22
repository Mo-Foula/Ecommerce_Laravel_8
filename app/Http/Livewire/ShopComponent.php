<?php

namespace App\Http\Livewire;

use App\Models\Coupon;
use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;
use App\Models\Category;

use Cart;

class ShopComponent extends Component
{
    public $sorting;
    public $pagesize;

    public function store($product_id,$product_name,$product_price)
    {
        Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success_message','item has been added in cart');
        return redirect()->route('product.cart');
    }
    public function mount()
    {
        $this->sorting = "default";
        $this->pagesize = 12;
    }
    function applySale($products){
        foreach ($products as $prod){
            $id = $prod->id;
            $field = Coupon::where('product_id','=',$id)->first();
            $prod->price = $prod->price * (100-$field->sale_percentage)/100.0;
        }
        return $products;
    }
    public function render()
    {
        if($this->sorting == 'date'){
            $products = Product::orderBy('created_at','DESC')->paginate($this->pagesize);
        }else if($this->sorting == 'price'){
            $products = Product::orderBy('regular_price','ASC')->paginate($this->pagesize);
        }else if($this->sorting == 'price-desc'){
            $products = Product::orderBy('regular_price','DESC')->paginate($this->pagesize);
        }else{
            $products = Product::paginate($this->pagesize);
        }


        foreach ($products as $key => $prod){
            $ide = $prod->id;
            $field = Coupon::where('product_id','=',$ide)->first();
            if($field != null){
                $products[$key]->regular_price *=  (100-$field->sale_percentage)/100.0;
            }
        }


        $cats = Category::all();

        return view('livewire.shop-component', ['products' => $products,'categories'=>$cats])->layout('layouts.base');
    }
}
