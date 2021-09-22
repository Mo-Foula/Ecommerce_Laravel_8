<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
class AdminCategoryList extends Component
{
  public function deleteCoupon($id){
    $category = Category::find($id);
    $category->delete();
  }
    public function render()
    {
      $categories = Category::all();
        return view('livewire.admin.admin-category-list',['categories'=>$categories])->layout('layouts.base');
    }
}
