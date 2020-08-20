<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin', function(){
    return view('admin.dashboard');
})->name('admin.dashboard');

// School Type

Route::group(['prefix' => 'schoolType', 'as' => 'schoolType.'], function() {
    Route::get('/index', 'SchoolTypeController@index')->name('index');
    Route::get('/create', 'SchoolTypeController@create')->name('create');
    Route::post('/store', 'SchoolTypeController@store')->name('store');
    Route::get('/edit/{id}', 'SchoolTypeController@edit')->name('edit'); 
    Route::post('/update/{id}', 'SchoolTypeController@update')->name('update'); 
    Route::post('/delete/{id}', 'SchoolTypeController@delete')->name('delete'); 
});