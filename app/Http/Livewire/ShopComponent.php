<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;
use App\Models\Category;


class ShopComponent extends Component
{
    public $sorting;
    public $pagesize;

    public function mount()
    {
        $this->sorting = "default";
        $this->pagesize = 12;
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

        $cats = Category::all();

        return view('livewire.shop-component', ['products' => $products,'categories'=>$cats])->layout('layouts.base');
    }
}
