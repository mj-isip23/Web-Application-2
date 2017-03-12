<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// show the form
Route::get('/add-students', 'StudentController@showForm');

//show the students
Route::get('/students', 'StudentController@studentsList');

Route::post('/add-students', 'StudentController@showForm');

//when register button is clicked
Route::post('/students', 'StudentController@add');


Route::get('/edit-student/{id}', 'StudentController@edit');

Route::get('/delete-student/{id}', 'StudentController@delete');

Route::get('/students/manage', 'StudentController@manage');

Route::post('/update/{id}', 'StudentController@update');
