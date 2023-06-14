<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('add-product',[ProductsController::class,'adding']);
Route::PUT('edit-product', [ProductsController::class, 'edit']);
Route::delete('delete-product',[ProductsController::class, 'delete']);
Route::get('getdata', [ProductsController::class, 'getData']);
    