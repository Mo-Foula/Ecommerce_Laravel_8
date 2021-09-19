<?php

namespace App\Http\Livewire\Vender;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use App\Models\Product;

class VenderEditProductComponent extends Component
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
    public  $category_id;

    public function mount($product_slug)
    {
        $product = Product::where('slug',$product_slug)->first();
        $this->name = $product->name;
        $this->slug = $product->slug;
        $this->description = $product->description;
        $this->regular_price = $product->regular_price;
        
        $this->stock_status = $product->stock_status;
        $this->category_id = $product->category_id;
       $this->quantity = $product->quantity;
        $this->image = $product->image;
        $this->product_id = $product->id;
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
        
        $product->stock_status=$this->stock_status;
        $product->category_id = $this->category_id;
        $product->quantity=$this->quantity;
        if($this->newimage)
        {
            $imageName=Carbon::now()->timestamp. '.'. $this->newimage->extension();
            $this->newimage->storeAs('products',$imageName);
            $product->image=$imageName;
        }

        $product->save();
        session()->flash('message','product has been updated');
    }
    public function render()
    {
        $all_categories = Category::all();
        return view('livewire.vender.vender-edit-product-component',['categories'=>$all_categories])->layout('layouts.base');
    }
}
