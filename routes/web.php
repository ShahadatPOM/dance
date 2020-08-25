<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('admin.login');
})->name('user.login');

Route::get('registration', function(){
    return view('admin.registration');
})->name('user.registration');

Route::get('admin', function(){
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::group(['prefix' => 'admin'], function() {

// School Type
Route::group(['prefix' => 'schoolType', 'as' => 'schoolType.'], function() {
    Route::get('/index', 'SchoolTypeController@index')->name('index');
    Route::get('/create', 'SchoolTypeController@create')->name('create');
    Route::post('/store', 'SchoolTypeController@store')->name('store');
    Route::get('/edit/{id}', 'SchoolTypeController@edit')->name('edit'); 
    Route::post('/update/{id}', 'SchoolTypeController@update')->name('update'); 
    Route::post('/delete/{id}', 'SchoolTypeController@delete')->name('delete'); 
});

// Role
Route::group(['prefix' => 'role', 'as' => 'role.'], function() {
    Route::get('/index', 'RoleController@index')->name('index');
    Route::get('/create', 'RoleController@create')->name('create');
    Route::post('/store', 'RoleController@store')->name('store');
    Route::get('/edit/{id}', 'RoleController@edit')->name('edit'); 
    Route::post('/update/{id}', 'RoleController@update')->name('update'); 
    Route::get('/delete/{id}', 'RoleController@delete')->name('destroy'); 
});

// Student
Route::group(['prefix' => 'student', 'as' => 'student.'], function() {
    Route::get('/index', 'StudentController@index')->name('index');
    Route::get('/create', 'StudentController@create')->name('create');
    Route::post('/store', 'StudentController@store')->name('store');
    Route::get('/edit/{id}', 'StudentController@edit')->name('edit'); 
    Route::post('/update/{id}', 'StudentController@update')->name('update'); 
    Route::get('/delete/{id}', 'RoleController@delete')->name('destroy'); 
});
});
