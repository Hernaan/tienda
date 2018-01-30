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

Route::get('/', 'StoreController@index');
Route::get('product/{slug}',[
	'as' => 'product-detail',
	'uses' => 'StoreController@show'
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//secion carrito
Route::get('cart/show',[
	'as' => 'cart-show',
	'uses' => 'CartController@show'
]);

Route::get('cart/add/{product}',[
	'as' => 'cart-add',
	'uses' => 'CartController@add'
]);

Route::get('cart/delete/{product}',[
	'as' => 'cart-delete',
	'uses' => 'CartController@delete'
]);

Route::get('cart/trash',[
	'as' => 'cart-trash',
	'uses' => 'CartController@trash'
]);

Route::get('cart/update/{product}/{quantity?}',[
	'as' => 'cart-update',
	'uses' => 'CartController@update'
]);
//validacion para detalle de pedido
Route::get('order-detail',[//cuando se quiera ver el detalle del pedido
	'middleware' => 'auth',//se comprueba si esta iniciando sesion
	'as' => 'order-detail',
	'uses' => 'CartController@orderDetail'//cuando inicie sesion se muestra el detalle del pedido
]);
