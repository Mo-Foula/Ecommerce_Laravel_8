<?php

namespace App\Http\Livewire;

use App\Models\HomeSlider;
use App\Models\product;
use App\Models\Category;
use App\Models\HomeCategory;

use Livewire\Component;


class HomeComponent extends Component
{

    public function render()
    {
        $latest=product::latest()->get()->take(8);
        $sliders=HomeSlider::where('status',1)->get();
        $lproducts=product::orderBy('created_at','DESC')->get()->take(8);
        $category=Category::find(1);
        $cats=explode(',',$category->sel_categories);
        $categoris=Category::whereIn('id',$cats)->get();
        $no_of_products=$category->no_of_products;
        $sproducts=product::where('sale_price','>',0)->inRandomOrder()->get()->take(8);



        $cate=Category::all()->take(5);
        $CategoriesItems = array();
        foreach ($cate as $cato){
            $CategoriesItems[$cato->id]=product::where('category_id','=',$cato->id)->get()->take(8);
        }







        return view('livewire.home-component',['sliders'=>$sliders,'lproducts'=>$lproducts,'categories'=>$categoris,'no_of_products'=>$no_of_products,'sproducts'=>$sproducts,'latest'=>$latest,'CategoriesItems'=> $CategoriesItems,'categories_footer'=>$cate])->layout('layouts.base');
    }
}
