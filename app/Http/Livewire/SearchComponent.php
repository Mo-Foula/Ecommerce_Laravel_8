<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;
use App\Models\Category;


class SearchComponent extends Component
{

    public $search;
    public $product_cat;
    public $product_cat_id;
    public $sorting;
    public $pagesize;

    public function mount()
    {
        $this->sorting = "default";
        $this->pagesize = 12;
        $this->fill(request()->only('search','product_cat','product_cat_id'));
    }

    public function render()
    {
        if($this->sorting == 'date'){
//            $products = Product::where('name','like','%'.$this->search.'%')->where('category_id',$this->product_cat_id)->orderBy('created_at','DESC')->paginate($this->pagesize);
            $products = Product::where('name','like','%'.$this->search.'%')->where('category_id','like','%'.$this->product_cat_id.'%')->orderBy('created_at','DESC')->paginate($this->pagesize);

        }else if($this->sorting == 'price'){
//            $products = Product::where('name','like','%'.$this->search.'%')->where('category_id',$this->product_cat_id)->orderBy('regular_price','ASC')->paginate($this->pagesize);
            $products = Product::where('name','like','%'.$this->search.'%')->where('category_id','like','%'.$this->product_cat_id.'%')->orderBy('regular_price','ASC')->paginate($this->pagesize);
        }else if($this->sorting == 'price-desc'){
//            $products = Product::where('name','like','%'.$this->search.'%')->where('category_id',$this->product_cat_id)->orderBy('regular_price','DESC')->paginate($this->pagesize);
            $products = Product::where('name','like','%'.$this->search.'%')->where('category_id','like','%'.$this->product_cat_id.'%')->orderBy('regular_price','DESC')->paginate($this->pagesize);
        }else{
//            $products = Product::where('name','like','%'.$this->search.'%')->where('category_id',$this->product_cat_id)->paginate($this->pagesize);
            $products = Product::where('name','like','%'.$this->search.'%')->where('category_id','like','%'.$this->product_cat_id.'%')->paginate($this->pagesize);
        }

        $cats = Category::all();

        return view('livewire.search-component', ['products' => $products,'categories'=>$cats])->layout('layouts.base');
    }
}
