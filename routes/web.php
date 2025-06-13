<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/dashboard", [AdminController::class, "index"])->name("dashboard");
Route::resource("/category", CategoryController::class, );

