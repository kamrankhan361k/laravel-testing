<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/products', function () {
    Product::create(request()->all());
    return response()->json(['message' => 'Product created'], 201);
});