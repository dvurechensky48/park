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

//Main Routes

Route::get('/', 'HomeController@index');
Route::get('/developments', 'DevelopmentsController@lister');
Route::get('/developments/{name}', 'DevelopmentsController@inner');
Route::get('/employment', 'EmploymentController@lister');
Route::get('/employment/{name}', 'EmploymentController@inner');
Route::get('/galery', 'GaleryController@lister');
Route::get('/galery/{name}', 'GaleryController@inner');
Route::get('/news', 'NewsController@lister');
Route::get('/news/{name}', 'NewsController@inner');
Route::get('/about', 'HomeController@about');
Route::get('/typical/{name}', 'HomeController@typical');

Route::get('/test','HomeController@test');
