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
Route::get('/employment/{name}/{view}', 'EmploymentController@view');

Route::get('/galery', 'GaleryController@lister');
Route::get('/galery/{name}', 'GaleryController@inner');

Route::get('/news', 'NewsController@lister');
Route::get('/news/{name}', 'NewsController@inner')->middleware('lang');

Route::get('/about', 'HomeController@about');

Route::get('/contacts', 'HomeController@contact');

Route::get('/typical/{name}', 'HomeController@typical');

Route::get('/search','HomeController@search');

Route::get('/places', 'PlacesController@lister');
Route::get('/places/{name}', 'PlacesController@inner');

Route::get('/test','HomeController@test');


/*
	localization
*/

Route::get('/ru', function(){
   Session::put('local', 'ru');
   return Redirect::back();
});


Route::get('/en', function(){
    Session::put('local', 'en');
    return Redirect::back();
});