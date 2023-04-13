<?php

use App\Http\Controllers\Backend\BuyAdController;
use App\Http\Controllers\Backend\RentAdController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\SaleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
| request()->route('user')->id!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//Frontent Section
Route::get('/',[HomeController::class,'index']);
Route::get('show-sale/{id}',[HomeController::class,'showSale'])->name('show-sale');
Route::get('show-buy/{id}',[HomeController::class,'showBuy'])->name('show-buy');
Route::get('show-rent/{id}',[HomeController::class,'showRent'])->name('show-rent');

Route::get('/search',[HomeController::class,'search'])->name('search');
Route::get('/adstore',[HomeController::class,'adstore'])->name('adstore');

//Backend Section
Route::get('/dashboard', function () {
    return view('backend.pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

    // sales ads
Route::middleware('auth')->group(function(){
    Route::resource('sale-add',SaleController::class);


    Route::resource('buy-add',BuyAdController::class);
    Route::resource('rent-add',RentAdController::class);
  
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
