<?php

use App\Http\Controllers;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobOffersController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/job', [JobOffersController::class, 'index' ]);


Route::get('/category', [CategoryController::class, 'index' ]);
Route::get('/category/create', [CategoryController::class, 'create']);
Route::post('/category/create', [CategoryController::class, 'store']);



Route::get('/company', [CompanyController::class, 'index' ]);

Route::get('/user', [UserController::class, 'index']);