<?php

namespace App\Http\Livewire;

use App\Models\Coupon;
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
        $sliders=HomeSlider::all();//where('status',1)->get();
//        $category=Category::find(1);
//        $cats=explode(',',$category->sel_categories);
        $categoris=1;//Category::whereIn('id',3)->get();
        $no_of_products=1;//$category->no_of_products;



        $sales = Coupon::latest()->get()->take(8);
        $sproducts=[];//product::where('sale_price','>',0)->inRandomOrder()->get()->take(8);
        foreach ($sales as $s){
            $a = product::where('id','=',$s->product_id)->first();
            $a->sale_price = $a->regular_price* (100-$s->sale_percentage)/100.0;
//            array_push($sproducts,$a);
            $sproducts[] = $a;
        }


        $cate=Category::all()->take(5);
        $CategoriesItems = array();
        foreach ($cate as $cato){
            $CategoriesItems[$cato->id]=product::where('category_id','=',$cato->id)->get()->take(8);
        }

        $justforreset = $cate[0]->id;





        return view('livewire.home-component',['justforreset'=>$justforreset,'sliders'=>$sliders,'sproducts'=>$sproducts,'latest'=>$latest,'CategoriesItems'=> $CategoriesItems,'categories_footer'=>$cate])->layout('layouts.base');
    }
}
