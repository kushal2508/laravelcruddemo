<?php

Route::get('/', 'StudentController@welcome');
Route::get('/student/create', 'StudentController@create');
Route::post('/students', 'StudentController@store');
Route::get('/student/showall', 'StudentController@showall');
Route::get('/student/show/{students}', 'StudentController@show');
Route::get('/student/destroy/{students}', 'StudentController@destroy');
Route::get('/student/edit/{students}', 'StudentController@edit');
// Route::match(['put', 'patch'], '/students/update/{students}', 'StudentController@update');