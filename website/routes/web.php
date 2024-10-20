<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// listensansichten //

Route::get('/company_listenansicht', function(){
    return view('company_listenansicht');
});

Route::get('/category_listenansicht', function(){
    return view('category_listenansicht');
});

Route::get('/job_listenansicht', function(){
    return view('job_listenansicht');
});

Route::get('/user_listenansicht', function(){
    return view('user_listenansicht');
});

// detailansichten //

Route::get('/company_detailansicht', function(){
    return view('company_detailansicht');
});

Route::get('/job_detailansicht', function(){
    return view('job_detailansicht');
});

Route::get('/category_detailansicht', function(){
    return view('category_detailansicht');
});

Route::get('/user_detailansicht', function(){
    return view('user_detailansicht');
});

// erstellungs_bearbeitung ansichten //

Route::get('/company_erstellung_bearbeitung', function(){
    return view('company_erstellung_bearbeitung');
});

Route::get('/job_erstellung_bearbeitung', function(){
    return view('job_erstellung_bearbeitung');
});

Route::get('/category_erstellung_bearbeitung', function(){
    return view('category_erstellung_bearbeitung');
});

Route::get('/user_erstellung_bearbeitung', function(){
    return view('user_erstellung_bearbeitung');
});