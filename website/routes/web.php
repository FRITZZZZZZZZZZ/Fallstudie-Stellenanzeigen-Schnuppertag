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
Route::post('/category', [CategoryController::class, 'edit' ]);
Route::get('/category/create', [CategoryController::class, 'create']);
Route::post('/category/create', [CategoryController::class, 'store']);
Route::get('/category/edit{id}', [CategoryController::class, 'edit']);
Route::post('/category/edit{id}', [CategoryController::class, 'update']);
Route::get('/category/show{id}', [CategoryController::class, 'show']);

Route::get('/company', [CompanyController::class, 'index' ]);
Route::post('/company', [CompanyController::class, 'edit' ]);
Route::get('/company/create', [CompanyController::class, 'create']);
Route::post('/company/create', [CompanyController::class, 'store']);
Route::get('/company/edit{id}', [CompanyController::class, 'edit']);
Route::post('/company/edit{id}', [CompanyController::class, 'update']);
Route::get('/company/show{id}', [CompanyController::class, 'show']);

Route::get('/job_offer', [JobOffersController::class, 'index' ]);
Route::post('/job_offer', [JobOffersController::class, 'edit' ]);
Route::get('/job_offer/create', [JobOffersController::class, 'create']);
Route::post('/job_offer/create', [JobOffersController::class, 'store']);
Route::get('/job_offer/edit{id}', [JobOffersController::class, 'edit']);
Route::post('/job_offer/edit{id}', [JobOffersController::class, 'update']);
Route::get('/job_offer/show{id}', [JobOffersController::class, 'show']);


Route::get('/user', [UserController::class, 'index' ]);
Route::post('/user', [UserController::class, 'edit' ]);
Route::get('/user/create', [UserController::class, 'create']);
Route::post('/user/create', [UserController::class, 'store']);
Route::get('/user/edit{id}', [UserController::class, 'edit']);
Route::post('/user/edit{id}', [UserController::class, 'update']);
Route::get('/user/show{id}', [UserController::class, 'show']);



Route::get('/company', [CompanyController::class, 'index' ]);

Route::get('/user', [UserController::class, 'index']);