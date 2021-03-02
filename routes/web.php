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

// user panel routing
Route::group(['prefix' => '/'], function(){
    Route::get('/welcome','Front\HomeController@welcome')->name('satirtha.welcome');
	// Home page
	Route::get('/','Front\HomeController@index')->name('satirtha.home');
    Route::get('/categories','Front\CategoryController@index')->name('satirtha.categories');
    Route::get('/product','Front\ProductController@index')->name('satirtha.product');
    Route::get('/contact','Front\ContactController@index')->name('satirtha.contact');
    Route::get('/join','Front\JoinController@index')->name('satirtha.join');

    // the email part 
    // for product email
    Route::post('/store-email','email\MailSendController@store')->name('satirtha.store-email');
    // for contact email
    Route::get('/store-contact-email','email\SendContactController@store')->name('satirtha.store-contact-email');
});

Route::post('/login/admin', 'Auth\LoginController@adminLogin')->name('admin.log-submit');
Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::view('/admin', 'admin');
Auth::routes();