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

Auth::routes();

//Route::resource('produit', 'ProduitController');
//Route::resource('user', 'UserController');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/product', 'PageController@product')->name('product');
Route::get('/productsList/{id}', 'PageController@products')->name('productsList');
Route::delete('/produit/{id}/destroy', 'PageController@destroy')->name('produit.destroy');
Route::delete('/produit/{id}/restore', 'PageController@restore')->name('produit.restore');
Route::get('/users', 'PageController@users')->name('usersList');
Route::get('/access/{user}', 'PageController@access')->name('access');
Route::get('/shopcart/{user}', 'PageController@shopcart')->name('shopcart');
Route::get('/create', 'PageController@creatProduit')->name('create');
Route::get('/store', 'PageController@storProduit')->name('store');
Route::get('/trached', 'PageController@trached')->name('trached');



