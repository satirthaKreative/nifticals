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
    // for subscribe email
    Route::get('/store-subcribe-email','email\SubscriberController@store')->name('satirtha.subscriber-email');
});

Route::post('/login/admin', 'Auth\LoginController@adminLogin')->name('admin.log-submit');
Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::view('/admin', 'admin');
Auth::routes();

// user panel routing
Route::group(['prefix' => '/admin'], function(){
    Route::get('/dashboard','Admin\DashboardController@index')->name('admin.dashboard');
    Route::get('/logout','Admin\DashboardController@logout')->name('admin.logout');
    // product category
    Route::get('/product-category','Admin\CategoryController@showPage')->name('admin.show-category');
    Route::get('/show-product-category','Admin\CategoryController@showProductCategory')->name('admin.show-actual-category');
    Route::get('/product-add-category','Admin\CategoryController@addProductCategory')->name('admin.product-add-category');
    Route::get('/show-edit-actual-category','Admin\CategoryController@showEditProductCategory')->name('admin.show-edit-actual-category');
    Route::get('/product-update-category','Admin\CategoryController@updateProductCategory')->name('admin.product-update-category');
    Route::get('/product-change-action-category','Admin\CategoryController@actionProductCategory')->name('admin.product-change-action-category');
    Route::get('/product-del-action-category','Admin\CategoryController@delProductCategory')->name('admin.product-del-action-category');
    // sub product category
    Route::get('/product-sub-category','Admin\SubCategoryController@showPage')->name('admin.show-sub-category');
        // get category for sub categories
        Route::get('/get-product-cate-sub-category','Admin\SubCategoryController@category_found')->name('admin.get-category-for-subcate');
        Route::get('/get-sub-category-for-subcate','Admin\SubCategoryController@chooseSubCategory')->name('admin.get-sub-category-for-subcate');
        ////////
    Route::get('/show-product-sub-category','Admin\SubCategoryController@showProductCategory')->name('admin.show-actual-sub-category');
    Route::get('/product-add-sub-category','Admin\SubCategoryController@addProductCategory')->name('admin.product-add-sub-category');
    Route::get('/show-edit-actual-sub-category','Admin\SubCategoryController@showEditProductCategory')->name('admin.show-edit-actual-sub-category');
    Route::get('/product-update-sub-category','Admin\SubCategoryController@updateProductCategory')->name('admin.product-update-sub-category');
    Route::get('/product-change-action-sub-category','Admin\SubCategoryController@actionProductCategory')->name('admin.product-change-action-sub-category');
    Route::get('/product-del-action-sub-category','Admin\SubCategoryController@delProductCategory')->name('admin.product-del-action-sub-category');
    // product details
    Route::get('/product-details','Admin\ProductController@showPage')->name('admin.show-product');
    Route::get('/show-product-details','Admin\ProductController@showProduct')->name('admin.show-actual-product');
    Route::post('/product-details-add','Admin\ProductController@addProduct')->name('admin.product-add');
    Route::get('/show-edit-product-details','Admin\ProductController@showEditProduct')->name('admin.show-edit-actual-product');
    Route::post('/product-details-update','Admin\ProductController@updateProduct')->name('admin.product-update');
    Route::get('/product-details-change-action','Admin\ProductController@actionProduct')->name('admin.product-change-action');
    Route::get('/product-details-del-action','Admin\ProductController@delProduct')->name('admin.product-del-action');
    Route::get('/product-gallery-del-action','Admin\ProductController@delGalleryProduct')->name('admin.product-gallery-del-action');
    // subscribers data's
    Route::get('/subscriber','Admin\SubscriberController@showPage')->name('admin.show-subscriber');
    Route::get('/subscriber-show','Admin\SubscriberController@subcriberShow')->name('admin.show-actual-subscriber');
    Route::get('/subscriber-action-change','Admin\SubscriberController@subcriberActionChange')->name('admin.subscriber-admin-change-status');
    Route::get('/subscriber-action-del','Admin\SubscriberController@subcriberActionDel')->name('admin.subscriber-admin-del-status');
    Route::get('/subscriber-email-view-panel','Admin\SubscriberController@subscribers_email_view_panel')->name('admin.subscribers_email_view_panel');
});