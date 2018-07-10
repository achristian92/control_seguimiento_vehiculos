<?php


Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {

});


Route::get('prueba', function () {
    return view('admin.prueba');
});