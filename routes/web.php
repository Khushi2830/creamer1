<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/dashboard", [AdminController::class, "index"])->name("dashboard");
<<<<<<< HEAD
Route::resource("/insert", CategoryController::class, );
Route::resource("/product",ProductController::class, );
=======
Route::resource("/category", CategoryController::class, );

>>>>>>> 610d4ec79abefaa55d0706701a9159e8b8b34869
