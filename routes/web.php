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





// Route::get('/', function () {
//     return view('welcome');
// });


//Pages Route
Route::get('/', 'PagesController@index')->name('home');

//temporary route, slugs to be added for each individual city
Route::get('/individualCity', 'PagesController@individualCity')->name('city');
Route::get('/individualRestaurant', 'PagesController@individualRestaurant')->name('restaurant');



Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
