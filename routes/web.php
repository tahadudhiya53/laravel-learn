<?php

use App\Http\Controllers\greeting;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('welcome', [greeting::class, 'welcome']);
Route::get('test', [greeting::class, 'test']);
