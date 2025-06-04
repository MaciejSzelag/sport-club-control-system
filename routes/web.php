<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home.page');

Route::get('/user', function () {
    return view('/user');
})->name('show.user');

Route::get('/create-user', function () {
    return view('create-user');
})->name('create.user');
