<?php

use App\Models\Food;
use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {

    $foods = Food::all();

    return view('user.home',compact('foods'));
})->name('/home');

Auth::routes();

Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::post('/tambah-menu', [App\Http\Controllers\Admin\FoodController::class, 'store'])->name('menu:store');
Route::get('/buang-menu/{food}', [App\Http\Controllers\Admin\FoodController::class, 'destroy'])->name('menu:destroy');

Route::get('/order-menu', function(){
  
    $details['email'] = 'aliff.rosli96@gmail.com';
  
    dispatch(new \App\Jobs\OrderSendJob($details));
  
    dd('Send Email Successfully');
});

Route::get('cart', [App\Http\Controllers\FoodController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [App\Http\Controllers\FoodController::class, 'addToCart'])->name('add:to:cart');
Route::get('checkout/{id}', [App\Http\Controllers\FoodController::class, 'checkout'])->name('checkout');
Route::patch('update-cart', [App\Http\Controllers\FoodController::class, 'update'])->name('update:cart');
Route::get('remove-from-cart', [App\Http\Controllers\FoodController::class, 'remove'])->name('remove:from:cart');