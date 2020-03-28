<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.pages.dashboard');
});

Route::get('page1', function() {
    return view('admin.pages.page1');
});
Route::get('page2', function() {
    return view('admin.pages.page2');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
