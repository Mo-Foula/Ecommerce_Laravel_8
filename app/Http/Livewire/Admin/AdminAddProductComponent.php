<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminAddProductComponent extends Component
{
    use WithFileUploads;

    public $name;
    public $slug;
    public $description;
    public $regular_price;
    public $sale_price;
    public $stock_status;
    public $quantity;
    public $vendor_id;
    public $image;
    public $category_id;

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
        $product->description=$this->description;
        $product->regular_price=$this->regular_price;
        $product->sale_price=$this->sale_price;
        $product->stock_status=$this->stock_status;
//        $product->vendor_id=$this->vendor_id;
        $product->vendor_id=$this->vendor_id;
        $product->category_id=$this->category_id;
        $product->quantity=$this->quantity;
        $imageName=Carbon::now()->timestamp. '.'. $this->image->extension();
        $this->image->storeAs('products',$imageName);
        $product->image=$imageName;
        if(User::where('id',$product->vendor_id)->value('utype') === 'VEN'){
            //check if vendor ID is correct
            $product->save();
            session()->flash('message','product has been created successfully');
        }else{
            session()->flash('message_err','Vendor ID is incorrect');
        }



    }
    public function render()
    {
        $all_categories = Category::all();
        return view('livewire.admin.admin-add-product-component',['categories'=>$all_categories] )->layout('layouts.base');
    }
}
