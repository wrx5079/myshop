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

Route::get('/', 'HomeController@index');
Route::get('/product/{slug}', 'HomeController@show')->name('product.show');
Route::get('/category/{slug}', 'HomeController@category')->name('category.show');
Route::get('/brand/{slug}', 'HomeController@brand')->name('brand.show');
Route::get('/search', 'HomeController@search')->name('search.show');

Route::group(['middleware' => 'auth'], function (){
    Route::get('/logout', 'AuthController@logout');
});

Route::group(['middleware' => 'guest'], function (){
    Route::get('/register', 'AuthController@registerForm');
    Route::post('/register', 'AuthController@register');
    Route::get('/login', 'AuthController@loginForm');
    Route::post('/login', 'AuthController@login');
});


Route::group(['prefix'=>'admin','namespace'=> 'Admin', 'middleware' => 'admin'], function (){
    Route::get('/', 'DashboardController@index');
    Route::resource('/users', 'UsersController');
    Route::resource('/categories', 'CategoriesController');
    Route::resource('/brands', 'BrandsController');
    Route::resource('/products', 'ProductsController');
});
