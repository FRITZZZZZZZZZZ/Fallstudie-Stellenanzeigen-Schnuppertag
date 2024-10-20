<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/job', function () {
    return view('job');
});

Route::get('/category', function () {
    return view('category');
});

Route::get('/company', function () {
    return view('company');
});

Route::get('/user', function () {
    return view('user');
});