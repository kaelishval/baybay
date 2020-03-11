<?php

use Illuminate\Support\Facades\Route;

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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

//Class Routes
Route::get('/viewaddclass', function () {
    return view('class.addclass');
});
Route::get('/classhome','ClassController@home');  
Route::post('/addclass','ClassController@add');
Route::get('/classlist','ClassController@list');
Route::get('/classshow/{class}','ClassController@show');
Route::get('/classshow/{class}/classedit','ClassController@edit');
Route::patch('/classshow/{class}','ClassController@update');
Route::delete('/classdelete/{class}','ClassController@destroy');

//End of Class Routes