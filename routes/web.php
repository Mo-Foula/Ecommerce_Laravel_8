<?php


use Illuminate\Support\Facades\Route;
use App\http\Livewire\HomeComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Vender\VenderDashboardComponent;
use App\Http\Livewire\Vender\VenderAddProductComponent;
use App\Http\Livewire\Vender\VenderProductComponent;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//for user
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
});

//for vender
Route::middleware(['auth:sanctum', 'verified','authvender'])->group(function(){
    Route::get('/vender/dashboard',VenderDashboardComponent::class)->name('vender.dashboard');
    Route::get('/vender/product',VenderProductComponent::class)->name('vender.products');
    Route::get('/vender/product/add',VenderAddProductComponent::class)->name('vender.addproduct');
});