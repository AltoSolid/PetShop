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
