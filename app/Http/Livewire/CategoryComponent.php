<?php

namespace App\Http\Livewire;

use App\Models\Coupon;
use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;
use App\Models\Category;
use Cart;

class CategoryComponent extends Component
{
    public $sorting;
    public $pagesize;
    public $category_slug;

    public function mount($category_slug)
    {
        $this->sorting = "default";
        $this->pagesize = 12;
        $this->category_slug = $category_slug;

    }
    public function store($product_id,$product_name,$product_price)
    {
        Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success_message','item has been added in cart');
        return redirect()->route('product.cart');
    }

    public function render()
    {
        $category = Category::where('slug',$this->category_slug)->first();

        $cat_id = $category->id;
        $cat_name = $category->name;

        if ($this->sorting == 'date') {
            $products = Product::where('category_id',$cat_id)->orderBy('created_at', 'DESC')->paginate($this->pagesize);
        } else if ($this->sorting == 'price') {
            $products = Product::where('category_id',$cat_id)->orderBy('regular_price', 'ASC')->paginate($this->pagesize);
        } else if ($this->sorting == 'price-desc') {
            $products = Product::where('category_id',$cat_id)->orderBy('regular_price', 'DESC')->paginate($this->pagesize);
        } else {
            $products = Product::where('category_id',$cat_id)->paginate($this->pagesize);
        }
        foreach ($products as $key => $prod){
            $ide = $prod->id;
            $field = Coupon::where('product_id','=',$ide)->first();
            if($field != null){
                $products[$key]->regular_price *=  (100-$field->sale_percentage)/100.0;
            }
        }
        $cats = Category::all();

        return view('livewire.category-component', ['products' => $products, 'categories' => $cats,'category_name'=>$cat_name])->layout('layouts.base');
    }
}
