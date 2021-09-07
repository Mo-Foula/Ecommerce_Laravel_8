<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use App\Models\Product;

class AdminEditProductComponent extends Component
{
    use WithFileUploads;

    public $name;
    public $slug;
    public $description;
    public $regular_price;
    public $sale_price;
    public $stock_status;
    public $quantity;
    public $image;
    public $newimage;
    public $product_id;
    public $vendor_id;
    public $category_id;

    public function mount($product_slug)
    {
        $product = Product::where('slug',$product_slug)->first();
        $this->name = $product->name;
        $this->slug = $product->slug;
        $this->description = $product->description;
        $this->regular_price = $product->regular_price;
        $this->sale_price = $product->sale_price;
        $this->stock_status = $product->stock_status;
        $this->quantity = $product->quantity;
        $this->image = $product->image;
        $this->product_id = $product->id;
        $this->category_id = $product->category_id;
        $this->vendor_id = $product->vendor_id;
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name,'-');
    }

    public function updateProduct()
    {
        $product=Product::find($this->product_id);
        $product->name=$this->name;
        $product->slug=$this->slug;
        $product->description=$this->description;
        $product->regular_price=$this->regular_price;
        $product->sale_price=$this->sale_price;
        $product->stock_status=$this->stock_status;
        $product->quantity=$this->quantity;
        $product->category_id = $this->category_id;
        $product->vendor_id = $this->vendor_id;

        if($this->newimage)
        {
            $imageName=Carbon::now()->timestamp. '.'. $this->newimage->extension();
            $this->newimage->storeAs('products',$imageName);
            $product->image=$imageName;
        }

        if(User::where('id',$product->vendor_id)->value('utype') === 'VEN'){
            //check if vendor ID is correct
            $product->save();
            session()->flash('message','product has been updated');
        }else{
            session()->flash('message_err','Vendor ID is incorrect');
        }
    }
    public function render()
    {$all_categories = Category::all();
        return view('livewire.admin.admin-edit-product-component',['categories'=>$all_categories])->layout('layouts.base');
    }
}
