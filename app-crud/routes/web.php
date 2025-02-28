<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product',[ProductController::class,'index'])->name('products.index');

Route::get('/product/create',[ProductController::class,'create'])->name('products.create');
     
Route::post('/product',[ProductController::class,'store'])->name('products.store');

Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('products.edit'); // Show edit form
Route::patch('/product/{id}', [ProductController::class, 'update'])->name('products.update'); // Handle update request

Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

