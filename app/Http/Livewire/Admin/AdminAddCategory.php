<?php

namespace App\Http\Livewire\Admin;
use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;

class AdminAddCategory extends Component
{
  public $categoryname;
   public $slug;
   public function generateSlug()
   {
       $this->slug = Str::slug($this->categoryname, '-');
   }
  public function addCategory(){
    $category = new Category();
    $category->name = $this->categoryname;
    $category->slug = $this->slug;
    $category->save();
  }
    public function render()
    {
        return view('livewire.admin.admin-add-category')->layout('layouts.base');
    }
}
