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
    return view('home');
});
Route::get('/inc/aboutus', function(){
    return view('inc.aboutus');
});
Route::get('/inc/contact-form',function(){
    return view('inc.contact-form');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/products','ProductController');
Route::resource('/feature','FeatureController');
Route::resource('/smart','Smart');
Route::resource('/tablet','Tablet');
Route::get('/Review','ReviewController@create')->name('Review.create');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/products/allproducts', 'ProductController@allproducts');
Route::get('/products/buynow/{id}','ProductController@buynow')->middleware('auth');
Route::get('/aboutus', 'HomeController@aboutus')->name('aboutus');
Route::get('/contact-form','HomeController@contact_form')->name('contact-form');
