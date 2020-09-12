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

//Meeting Routes

//Route::get('/meeting', 'HomeController@index')->name("home.index");

Route::get('/meeting/create','MeetingController@create')->name("meeting.create");

Route::get('/meeting/show', 'MeetingController@showAll')->name("meeting.show");

Route::get('/meeting/show/{id}', 'MeetingController@showId')->name("meeting.showID");

Route::post('/meeting/save', 'MeetingController@save')->name("meeting.save");

Route::get('/meeting/destroy/{id}', 'MeetingController@destroy')->name("meeting.destroy");