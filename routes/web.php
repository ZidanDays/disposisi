<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DisposisiController;

Route::get('/', function () {
    return view('index');
});

Route::resource('disposisi', DisposisiController::class);