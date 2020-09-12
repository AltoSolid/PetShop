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

Route::get('/create', 'PetController@create')->name("pet.create");

Route::get('/listObj', 'PetController@listObj')->name("pet.listObj");

Route::get('/petInfo/{id}', 'PetController@petInfo')->name("pet.petInfo");

Route::get('/delete/{id}', 'PetController@delete')->name("pet.delete");

Route::post('/save', 'PetController@save')->name("pet.save");


//PRODUCT

Route::get('/product/create', 'ProductController@create')->name("product.create");

Route::get('/product/show', 'ProductController@listObj')->name("product.show");

Route::get('/product/show/{id}', 'ProductController@petInfo')->name("product.showInfo");

Route::get('/product/delete/{id}', 'ProductController@delete')->name("product.delete");

Route::post('/product/save', 'ProductController@save')->name("product.save");

//ORDER

Route::get('/order/create', 'OrderController@create')->name("order.create");

Route::get('/order/show', 'OrderController@listObj')->name("order.show");

Route::get('/order/show/{id}', 'OrderController@petInfo')->name("order.showInfo");

Route::get('/order/delete/{id}', 'OrderController@delete')->name("order.delete");

Route::post('/order/save', 'OrderController@save')->name("order.save");