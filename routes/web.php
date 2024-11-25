<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

//ini untuk membuat rute dengan path "/products" yang nanti akan di arahkan mada controller

Route::resource('/products', ProductController::class);
