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
});

Auth::routes();

Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::post('/tambah-menu', [App\Http\Controllers\Admin\FoodController::class, 'store'])->name('menu:store');
