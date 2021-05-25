<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', 'homeController@homeFunction');

Route::get('/guest/{id}', 'homeController@guestFunction')->name('guest');