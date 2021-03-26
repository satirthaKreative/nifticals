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
Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm')->name('admin.new-login');
Route::view('/admin', 'admin');
Auth::routes();

// user panel routing
Route::group(['prefix' => '/admin'], function(){
    Route::get('/dashboard','Admin\DashboardController@index')->name('admin.dashboard');
    Route::post('/logout','Admin\DashboardController@logout')->name('admin.logout');
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

    // payment
    Route::get('/payment','Admin\PaymentController@showPage')->name('admin.payment-show');
    Route::get('/show-payment','Admin\PaymentController@showPayment')->name('admin.show-actual-payment');
    Route::get('/show-edit-actual-category','Admin\PaymentController@showEditPayment')->name('admin.show-edit-actual-payment');
    Route::get('/product-update-category','Admin\PaymentController@updatePayment')->name('admin.product-update-payment');
    Route::get('/product-change-action-category','Admin\PaymentController@actionPayment')->name('admin.product-change-action-payment');
    Route::get('/product-del-action-category','Admin\PaymentController@delPayment')->name('admin.product-del-action-payment');
    // end of payment


    // banner 
    Route::get('/banner','Admin\BannerController@showPage')->name('admin.show-banner');
    Route::get('/show-banner-details','Admin\BannerController@showProduct')->name('admin.show-actual-banner');
    Route::post('/banner-details-add','Admin\BannerController@addProduct')->name('admin.banner-add');
    Route::get('/show-edit-banner-details','Admin\BannerController@showEditProduct')->name('admin.show-edit-actual-banner');
    Route::post('/banner-details-update','Admin\BannerController@updateProduct')->name('admin.banner-update');
    Route::get('/banner-details-change-action','Admin\BannerController@actionProduct')->name('admin.banner-change-action');
    Route::get('/banner-details-del-action','Admin\BannerController@delProduct')->name('admin.banner-del-action');
    Route::get('/banner-gallery-del-action','Admin\BannerController@delGalleryProduct')->name('admin.banner-gallery-del-action');
    // end of banner

    
});