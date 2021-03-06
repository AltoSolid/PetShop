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
    return view('home.index');

});

Route::get('/home', function () {
    return view('home.index');
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
Route::post('/product/addToCart/{id}', 'ProductController@addToCart')->name("product.addToCart");
Route::post('/cart/removeCart', 'ProductController@removeCart')->name("product.removeCart");
Route::get('/cart/showCart', 'ProductController@showCart')->name("product.showCart");
Route::post('/cart/payment', 'PaymentController@show')->name("payment.show");
Route::get('/product/userOrders', 'ProductController@viewOrders')->name("product.viewOrders");

//ORDER

Route::get('/order/create', 'OrderController@create')->name("order.create");
Route::get('/order/show', 'OrderController@show')->name("order.show");
Route::get('/order/delete/{id}', 'OrderController@delete')->name("order.delete");
Route::post('/order/save', 'OrderController@save')->name("order.save");

//MEETING

Route::get('/meeting/create','MeetingController@create')->name("meeting.create");
Route::get('/meeting/show', 'MeetingController@showAll')->name("meeting.show");
Route::get('/meeting/show/{id}', 'MeetingController@showId')->name("meeting.showID");
Route::post('/meeting/save', 'MeetingController@save')->name("meeting.save");
Route::get('/meeting/destroy/{id}', 'MeetingController@destroy')->name("meeting.destroy");
Route::get('/meeting/assist/{id}', 'MeetingController@assist')->name("meeting.assist");

//IMAGES

Route::get('/image/index', 'ImageController@index')->name("image.index");
Route::post('/image/save', 'ImageController@save')->name("image.save");
Route::get('/download-pdf','MeetingController@downloadPdf')->name("downloadPdf");
Route::get('/test-email', 'MailController@sendEmail')->name('test-email');

//AUTH

Auth::routes();

//LANG

Route::get('/lang/{locale}', 'HomeController@changeLang')->name("home.lang");

//PARTNER

Route::get('/partner/show', "PartnerController@list")->name('partner.show');