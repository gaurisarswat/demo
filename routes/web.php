<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('user');
});
Route::resource('/category', CategoryController::class);
// Route::get('/category', [CategoryController::class,"index"]);
// Route::get('/category/create', [CategoryController::class,"create"]);
// Route::post('/category', [CategoryController::class,"store"]);
// Route::get('/category/{id}', [CategoryController::class,"show"]);
// Route::get('/category/{id}/edit', [CategoryController::class,"edit"]);
// Route::put('/category/{id}', [CategoryController::class,"update"]);
// Route::delete('/category/{id}', [CategoryController::class,"destroy"]); in laravel we have to make form for delete we can't do this job with get method