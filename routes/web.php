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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('users', 'UserController');

Route::resource('farmroles', 'FarmroleController');

Route::resource('farms', 'FarmController');

Route::resource('lots', 'LotController');

Route::resource('products', 'ProductController');

Route::resource('tasks', 'TaskController');

Route::resource('farmsales', 'FarmsaleController');

Route::resource('productypes', 'ProductypeController');

Route::resource('unitofmeasures', 'UnitofmeasureController');

Route::resource('agroinputs', 'AgroinputController');

Route::resource('orderinputs', 'OrderinputController');

Route::resource('agroservices', 'AgroserviceController');

Route::resource('orderservices', 'OrderserviceController');

Route::resource('farmproducts', 'FarmproductController');

Route::resource('tests', 'testController');

Route::resource('categories', 'CategoryController');