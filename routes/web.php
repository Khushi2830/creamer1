<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

use Illuminate\Support\Facades\Route;

Route::get("/",[HomeController::class, "home"])->name("home");
Route::get("/aboutUs",[HomeController::class, "about"])->name("abuout");

Route::get("/dashboard", [AdminController::class, "index"])->name("dashboard");


Route::resource("/product",ProductController::class, );

Route::resource("/category", CategoryController::class, );

