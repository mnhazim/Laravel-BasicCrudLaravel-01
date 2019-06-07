<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('tutorial', 'StudentController@index');
Route::post('tutorial', 'StudentController@store');
Route::get('tutorial/{students}/show', 'StudentController@show');
Route::post('tutorial/{students}/delete', 'StudentController@delete');
Route::get('tutorial/{students}/update', 'StudentController@edit');
Route::post('tutorial/{students}/update', 'StudentController@update');