<?php


use Illuminate\Support\Facades\Route;
use App\http\Livewire\HomeComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Vender\VenderDashboardComponent;
use App\Http\Livewire\Vender\VenderAddProductComponent;
use App\Http\Livewire\Vender\VenderProductComponent;
use App\Http\Livewire\Vender\VenderEditProductComponent;

use App\Providers\RouteServiceProvider;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',HomeComponent::class);
Route::get('/index',HomeComponent::class);


Route::get('/contact_us',\App\Http\Livewire\ContactUsComponent::class)->name('contact_us');
Route::get('/about_us',\App\Http\Livewire\AboutUsComponent::class)->name('about_us');
Route::get('/privacy_policy',\App\Http\Livewire\PrivacyPolicyComponent::class)->name('privacy_policy');
Route::get('/terms_conditions',\App\Http\Livewire\TermsConditionsComponent::class)->name('terms_conditions');

Route::get('/cart',function (){
    return view('ada');
})->name('cart');


Route::get('/shop',\App\Http\Livewire\ShopComponent::class)->name('shop');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//for user
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/user/account',UserDashboardComponent::class)->name('user.account');
    Route::get('/user/purchase_history',UserDashboardComponent::class)->name('user.purchase_history');
});

//for vender
Route::middleware(['auth:sanctum', 'verified','authvender'])->group(function(){
    Route::get('/vender/dashboard',VenderDashboardComponent::class)->name('vender.dashboard');
    Route::get('/vender/product',VenderProductComponent::class)->name('vender.products');
    Route::get('/vender/product/add',VenderAddProductComponent::class)->name('vender.addproduct');
    Route::get('/vender/product/edit/{product_slug}',VenderEditProductComponent::class)->name('vender.editproduct');

});

Route::middleware(['auth:sanctum','verified','authadmin'])->group(function(){
    Route::get('/admin/product',\App\Http\Livewire\Admin\AdminProductComponent::class)->name('admin.products');
    Route::get('/admin/product/add',\App\Http\Livewire\Admin\AdminAddProductComponent::class)->name('admin.add_products');
//    Route::get('/admin/product/add',VenderAddProductComponent::class)->name('vender.addproduct');
    Route::get('/admin/product/edit/{product_slug}',\App\Http\Livewire\Admin\AdminEditProductComponent::class)->name('admin.edit_products');
    Route::get('/admin/vendor',\App\Http\Livewire\Admin\AdminVenderComponent::class)->name('admin.vendor');
    Route::get('/admin/discount',\App\Http\Livewire\Admin\AdminDiscountComponent::class)->name('admin.discount');
    Route::get('/admin/vendor/add',\App\Http\Livewire\Admin\Adminaddvendorcomponent::class)->name('admin.addvendor');
    Route::get('/admin/slider',\App\Http\Livewire\Admin\AdminHomeSlider::class)->name('admin.homeslider');
    Route::get('/admin/slider/add',\App\Http\Livewire\Admin\AdminAddHomeSliderComponent::class)->name('admin.addhomeslider');
    Route::get('/admin/slider/edit/{slide_id}',\App\Http\Livewire\Admin\AdminEditHomeSliderComponent::class)->name('admin.edithomeslider');
});

Route::get('/product-category/{category_slug}',\App\Http\Livewire\CategoryComponent::class)->name('product.category');

Route::get('/search',\App\Http\Livewire\SearchComponent::class)->name('product.search');



//// ADMIN
////admin vendors
//Route::get('/admin/vender', \App\Http\Livewire\Admin\AdminComponent::class)->name('admin.vender');
////admin vendors
//Route::get('/admin/product', \App\Http\Livewire\Admin\AdminComponent::class)->name('admin.product');
////admin vendors
//Route::get('/admin/coupon', \App\Http\Livewire\Admin\AdminComponent::class)->name('admin.coupon');



//// OLD ADMIN
////admin vendors
//Route::get('/admin/vendor', function () {
//    return view('/admin/vendor');
//});
////Route::get('/admin/vendors',[\App\Http\Controllers\adminController::class,'index']);
////admin after login
//Route::get('/admin',function () {
//    return view('admin/vendor');
//});
////admin
//Route::get('/admin/product', function () {
//    return view('admin/product');
//});
////admin
//Route::get('/admin/coupon', function () {
//    return view('admin/coupon');
//});

