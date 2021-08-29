<?php

namespace App\Http\Livewire\Vender;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class VenderAddProductComponent extends Component
{
    use WithFileUploads;

    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $regular_price;
    public $sale_price;
    public $SKU;
    public $stock_status;
    public $featured;
    public $quantity;
    public $image;

    public function mount()
    {
        $this->stock_status="instock";
        $this->featured="0";
    }

    public function generateSlug()
    {
        $this->slug=Str::slug($this->name,'-');
    }

    public function addProduct()
    {
        $product=new Product();
        $product->name=$this->name;
        $product->slug=$this->slug;
        $product->short_description=$this->short_description;
        $product->description=$this->description;
        $product->regular_price=$this->regular_price;
        $product->sale_price=$this->sale_price;
        $product->SKU=$this->SKU;
        $product->stock_status=$this->stock_status;
        $product->featured=$this->featured;
        $product->quantity=$this->quantity;
        $imageName=Carbon::now()->timestamp. '- '. $this->image->extension();
        $this->image->storeAs('products',$imageName);
        $product->image=$imageName;
        $product->save();
        session()->flash('message','product has been created successfully');



    }
    public function render()
    {
        // $categories= Category ::all();
        // return view('livewire.vender.vender-add-product-component' ,['categories'=>$categories])->layout('layouts.base');
        
        return view('livewire.vender.vender-add-product-component' )->layout('layouts.base');
    }
}
