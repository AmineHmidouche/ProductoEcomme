<?php

use GuzzleHttp\Middleware;
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
Route::group(['middleware' => 'roles','roles' => ['Admin','Editeur']], function () {
    Route::get('/product', 'PageController@product')->name('product');
    Route::get('/productsList/{id}', 'PageController@products')->name('productsList');
    Route::delete('/produit/{id}/destroy', 'PageController@destroy')->name('produit.destroy');
    Route::delete('/produit/{id}/restore', 'PageController@restore')->name('produit.restore');
    Route::delete('/produit/{id}/forcedelete', 'PageController@forcedelete')->name('produit.forcedelete');
    Route::get('/users', 'PageController@users')->name('users');
    Route::get('/access/{user}', 'PageController@access')->name('access');
    Route::get('/shopcart/{user}', 'PageController@shopcart')->name('shopcart');
    Route::get('/create', 'PageController@creatProduit')->name('create');
    Route::get('/store', 'PageController@storProduit')->name('store');
    Route::get('/trached', 'PageController@trached')->name('trached');
        
    });

Route::group(['middleware' => 'roles','roles' => ['User']], function () {
    Route::get('/product', 'PageController@product')->name('product');
    Route::get('/productsList/{id}', 'PageController@products')->name('productsList');
});



Route::get('pages.usersList',[
    'uses'=>  'HomeController@admin',
    'as' => 'pages.usersList',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
    
Route::post('/add_role',[
    'uses'=>  'HomeController@addRole',
    'as' => 'pages.usersList',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
    

Route::get('/denie-acess', 'HomeController@denieAcess');
    
