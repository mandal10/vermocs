<?php

use App\Http\Controllers\navbar\NavbarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
#Navbar routes
Route::get('/about', [NavbarController::class, 'about'])->name('about');
Route::get('/cart', [NavbarController::class, 'cart'])->name('cart');
