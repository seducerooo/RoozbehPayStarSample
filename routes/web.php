<?php

use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;

Route::get('/',[CheckoutController::class,'index']);
Route::get('/hello',[CheckoutController::class,'show']);
