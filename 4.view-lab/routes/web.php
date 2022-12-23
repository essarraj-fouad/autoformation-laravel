<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PromotionsController;

Route::get('/', [HomeController::class, 'index']);



 
Route::resource('promotions', PromotionsController::class);

