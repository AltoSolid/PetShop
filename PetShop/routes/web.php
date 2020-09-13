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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/index', 'HomeController@index')->name("home.index");

Route::get('/contact', 'HomeController@contact')->name("home.contact");


//PET

Route::get('/pet/create', 'PetController@create')->name("pet.create");

Route::get('/pet/show', 'PetController@show')->name("pet.show");

Route::get('/pet/show/{id}', 'PetController@petInfo')->name("pet.petInfo");

Route::get('/pet/delete/{id}', 'PetController@delete')->name("pet.delete");

Route::post('/pet/save', 'PetController@save')->name("pet.save");


//PRODUCT

Route::get('/product/create', 'ProductController@create')->name("product.create");

Route::get('/product/show', 'ProductController@show')->name("product.show");

Route::get('/product/show/{id}', 'ProductController@showxId')->name("product.showInfo");

Route::get('/product/delete/{id}', 'ProductController@delete')->name("product.delete");

Route::post('/product/save', 'ProductController@save')->name("product.save");


//ORDER

Route::get('/order/create', 'OrderController@create')->name("order.create");

Route::get('/order/show', 'OrderController@show')->name("order.show");

Route::get('/order/delete/{id}', 'OrderController@delete')->name("order.delete");

Route::post('/order/save', 'OrderController@save')->name("order.save");


//Meeting Routes

//Route::get('/meeting', 'HomeController@index')->name("home.index");

Route::get('/meeting/create','MeetingController@create')->name("meeting.create");

Route::get('/meeting/show', 'MeetingController@showAll')->name("meeting.show");

Route::get('/meeting/show/{id}', 'MeetingController@showId')->name("meeting.showID");

Route::post('/meeting/save', 'MeetingController@save')->name("meeting.save");

Route::get('/meeting/destroy/{id}', 'MeetingController@destroy')->name("meeting.destroy");
