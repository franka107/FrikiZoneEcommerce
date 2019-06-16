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


Route::bind('product', function($slug){
    return App\Product::where('slug', $slug)->first();
});

Route::get('/', 'StoreController@index')->name('home');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('product/{slug}', 'StoreController@show')->name('product-detail');

Route::get('cart/show', 'CartController@show')->name('cart-show');

Route::get('cart/add/{product}', 'CartController@add')->name('cart-add');

Route::get('cart/delete/{product}', 'CartController@delete')->name('cart-delete');

Route::get('cart/trash', 'CartController@trash')->name('cart-trash');

Route::get('cart/update/{product}/{quantity?}', 'CartController@update')->name('cart-update');

Route::get('order-detail', 'CartController@orderDetail')->name('order-detail')
                                                        ->middleware('auth');

//----------------------------Pay-Pal------------------------------------------
Route::get('payment', 'PaypalController@postPayment')->name('payment');                                                

Route::get('payment/status', 'PaypalController@getPaymentStatus')->name('payment.status');
//-----------------------------------------------------------------------------


//------------------------Administrador---------------------------//
Route::resource('admin/category', 'Admin\CategoryController');
