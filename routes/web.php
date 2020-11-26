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

Route::get('/', 'PagesController@index')->name('index');

Route::get('/contact', 'PagesController@contact')->name('contact');

Route::get('/products', 'PagesController@products')->name('products');



Route::prefix('admin')->group(function (){
    Route::get('/', 'AdminPagesController@index');
    Route::get('/product/create', 'AdminPagesController@createProduct')->name('admin.product.create');
    Route::post('/product/store', 'AdminPagesController@storeProduct')->name('admin.product.store');
});
