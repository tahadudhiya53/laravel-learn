<?php

use App\Http\Controllers\greeting;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('userForm', function () {
    return view('user-form');
});

Route::post('userSubmit', [userController::class, 'submit']);

Route::get('welcome', [greeting::class, 'welcome']);
Route::get('test', [greeting::class, 'test']);

