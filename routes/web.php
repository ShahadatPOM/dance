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
Route::get('student/registration', 'StudentController@registration')->name('student.registration');

Route::group(['prefix' => 'student', 'middleware' => 'auth', 'as' => 'student.'], function() {
    Route::get('/index', 'StudentController@index')->name('index');
    Route::get('/create', 'StudentController@create')->name('create');
    Route::post('/store', 'StudentController@store')->name('store');
    Route::get('/edit/{id}', 'StudentController@edit')->name('edit'); 
    Route::post('/update/{id}', 'StudentController@update')->name('update'); 
    Route::get('/pending/{id}', 'StudentController@pending')->name('pending'); 
    Route::get('/block/{id}', 'StudentController@block')->name('block'); 
    Route::get('/delete/{id}', 'StudentController@delete')->name('destroy'); 
});

Route::group(['prefix' => 'nok', 'middleware' => 'auth', 'as' => 'nok.'], function() {
    Route::get('/index', 'NokController@index')->name('index');
    Route::get('/create', 'NokController@create')->name('create');
    Route::post('/store', 'NokController@store')->name('store');
    Route::get('/edit/{id}', 'NokController@edit')->name('edit'); 
    Route::post('/update/{id}', 'NokController@update')->name('update'); 
    Route::get('/delete/{id}', 'NokController@delete')->name('destroy'); 
});

Route::group(['prefix' => 'surgery', 'middleware' => 'auth', 'as' => 'surgery.'], function() {
    Route::get('/index', 'SurgeryController@index')->name('index');
    Route::get('/create', 'SurgeryController@create')->name('create');
    Route::post('/store', 'SurgeryController@store')->name('store');
    Route::get('/edit/{id}', 'SurgeryController@edit')->name('edit'); 
    Route::post('/update/{id}', 'SurgeryController@update')->name('update'); 
    Route::get('/delete/{id}', 'SurgeryController@delete')->name('destroy'); 
});

Route::group(['prefix' => 'edSchool', 'middleware' => 'auth', 'as' => 'edSchool.'], function() {
    Route::get('/index', 'EdSchoolController@index')->name('index');
    Route::get('/create', 'EdSchoolController@create')->name('create');
    Route::post('/store', 'EdSchoolController@store')->name('store');
    Route::get('/edit/{id}', 'EdSchoolController@edit')->name('edit'); 
    Route::post('/update/{id}', 'EdSchoolController@update')->name('update'); 
    Route::get('/delete/{id}', 'EdSchoolController@delete')->name('destroy'); 
});

Route::group(['prefix' => 'council', 'middleware' => 'auth', 'as' => 'council.'], function() {
    Route::get('/index', 'CouncilController@index')->name('index');
    Route::get('/create', 'CouncilController@create')->name('create');
    Route::post('/store', 'CouncilController@store')->name('store');
    Route::get('/edit/{id}', 'CouncilController@edit')->name('edit'); 
    Route::post('/update/{id}', 'CouncilController@update')->name('update'); 
    Route::get('/delete/{id}', 'CouncilController@delete')->name('destroy'); 
});

Route::group(['prefix' => 'schoolType', 'middleware' => 'auth', 'as' => 'schoolType.'], function() {
    Route::get('/index', 'SchoolTypeController@index')->name('index');
    Route::get('/create', 'SchoolTypeController@create')->name('create');
    Route::post('/store', 'SchoolTypeController@store')->name('store');
    Route::get('/edit/{id}', 'SchoolTypeController@edit')->name('edit'); 
    Route::post('/update/{id}', 'SchoolTypeController@update')->name('update'); 
    Route::get('/delete/{id}', 'SchoolTypeController@delete')->name('destroy'); 
});
});
