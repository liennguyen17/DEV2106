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

//trang home cua websize
Route::get('/','ShopController@index');

Route::get('/tim-kiem','ShopController@search')->name('shop.search');

Route::get('/danh-muc-san-pham/{slug}','ShopController@category')->name('shop.category');;

Route::get('/chi-tiet-san-pham/{slug}','ShopController@product')->name('shop.product');

Route::get('/lien-he', 'ShopController@contact')->name('shop.contact');

Route::post('/gui-lien-he', 'ShopController@postContact')->name('shop.postContact');

Route::get('/dat-hang','ShopController@order');

//ds tin tuc
Route::get('/tin-tuc', 'ShopController@articles')->name('shop.articles');

//chitiet tin tuc
Route::get('/chi-tiet-tin-tuc/{slug}','ShopController@detailArticle')->name('shop.detailArticle');

//đăng nhập
Route::get('/admin/login','AdminController@login')->name('admin.login');

Route::post('/admin/postLogin','AdminController@postLogin')->name('admin.postLogin');

//đăng xuất
Route::get('/admin/logout','AdminController@logout')->name('admin.logout');


//Route::get('/duongdan','TenController@method');
Route::group(['prefix' => 'admin','as' => 'admin.', 'middleware' => 'checkLogin'], function() {
    //trang quan tri
    Route::get('/', 'AdminController@index');

    Route::resource('banner', 'BannerController');
    Route::resource('user', 'UserController');
    Route::resource('product', 'ProductController');
    Route::resource('category', 'CategoryController');
    Route::resource('article', 'ArticleController');
    Route::resource('brand', 'BrandController');
    Route::resource('contact', 'ContactController');


});
