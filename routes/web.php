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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', 'WelcomeController@index')->name('homepage');
Auth::routes(['verify' => true]);

Route::get('/home', 'front\UserController@dashboard')->name('home');
Route::get('/user/register', 'front\UserController@register')->name('user-register');
Route::get('/user/myaccount', 'front\UserController@myaccount')->name('user-myaccount');
Route::get('/my-account', 'front\UserController@dashboard')->name('my-account')->middleware(['auth','verified']);
Route::get('/user/login', 'front\UserController@login')->name('user-login');
Route::get('/user/forgetpassword', 'front\UserController@forgetpwd')->name('user-forget-password');
Route::get('/change-password', 'front\UserController@settings')->name('front.users.updatepwd')->middleware(['auth','verified']);;
Route::post('/change-password', 'front\UserController@changepwd')->name('user.change.password')->middleware(['auth','verified']);;
Route::resources([
    'tokens' =>'front\TokenController',
    'products'=>'front\ProductController',
    'orders'=>'OrderController',
    'users'=>'front\UserController',
    'pages'=>'front\PageController'
]);
Route::post('/product-multiaction-front', 'front\ProductController@multiaction')->name('products.multiaction.front');
Route::get('/search-marketplace', 'front\ProductController@searchmarketplace')->name('front.search');
//cart
Route::get('/cart', 'CartController@cart');
Route::get('/checkout', 'CartController@checkout');
Route::get('/add-to-cart/{id}', 'CartController@addToCart');
Route::post('/add-to-cart-form', 'CartController@addToCartForm');
Route::patch('/update-cart', 'CartController@update');
Route::delete('/remove-from-cart', 'CartController@remove');
Route::get('/order-success', 'CartController@ordersuccess')->name('order-success');

//Admin routes
Route::post('/admin-login', 'Auth\LoginController@loginadmin')->name('adminlogin');
Route::get('/admin', 'Admin\AdminController@dashboard')->name('admin-dashboard')->middleware('is_admin');
Route::get('/admin/login', 'Admin\AdminController@login')->name('admin-login');

Route::prefix('admin')->middleware('is_admin')->name('admin.')->group(function () {

    Route::resources([
        'users' =>'Admin\UserController',
        'products'=>'Admin\ProductController',
        'banners'=>'Admin\BannerController',
        'orders'=>'Admin\OrderController',
        'settings'=>'Admin\SettingController',
        'pages'=>'Admin\PageController'
    ]);
    Route::get('/deletelogo/{id}', 'Admin\SettingController@deleteimage');
    Route::post('/user-multiaction', 'Admin\UserController@multiaction')->name('users.multiaction');
    Route::post('/product-multiaction', 'Admin\ProductController@multiaction')->name('products.multiaction');
    Route::post('/banner-multiaction', 'Admin\BannerController@multiaction')->name('banners.multiaction');
    Route::post('/page-multiaction', 'Admin\PageController@multiaction')->name('pages.multiaction');
    Route::post('/order-multiaction', 'Admin\OrderController@multiaction')->name('orders.multiaction');
    Route::get('/settings', 'Admin\AdminController@settings')->name('users.updatepwd');
    Route::post('/changepwd', 'Admin\AdminController@changepwd')->name('change.password');
    Route::get('/ordersbyuser/{id}', 'Admin\OrderController@byusers')->name('orders.byuser');
});