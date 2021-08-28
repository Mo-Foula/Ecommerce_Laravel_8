<?php


use Illuminate\Support\Facades\Route;
use App\http\Livewire\HomeComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Vender\VenderDashboardComponent;
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
});