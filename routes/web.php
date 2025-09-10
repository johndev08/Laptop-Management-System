<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaptopController;

Route::get('/', function () {
    return view('laptop.index');
});
Route::resource('laptop', LaptopController::class);