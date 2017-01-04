<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::group(['domain' => env('APP_API_URL') , 'namespace' => 'Api'] , function (){

    Route::post('password/email' , [
        'uses' => 'Auth\\ForgotPasswordController@sendResetLinkEmail'
    ]);
    
    Route::get('customers/{customer}/addresses/{address}/main' , [
        'uses' => 'Auth\\AddressesController@main'
    ]);

    Route::resource('customers.addresses' , 'Auth\\AddressesController', [
        'only' => ['index' , 'store' , 'show' , 'update' , 'destroy']
    ]);
    //Routes auth
    Route::group(['prefix' => 'auth' , 'namespace' => 'Auth'] , function (){

        Route::post('login/{cart?}' , [
            'uses'       => 'LoginController@auth',
            'middleware' => ['custom_api' , 'cors']
        ]);

        Route::put('{customer}' , [
            'uses'       => 'AccountController@update',
            'middleware' => 'custom_api'
        ]);

        Route::post('register/{cart?}' , [
            'uses'       => 'RegisterController@register',
            'middleware' => 'custom_api'
        ]);

        Route::get('email/{email}/{cart}' , [
            'uses'       => 'LoginController@assignUserToOrder',
            'middleware' => 'custom_api'
        ]);

        Route::put('{customer}/password' ,[
            'uses' => 'PasswordController@change',
            'middleware' => 'custom_api'
        ]);
    });

    //Routes cart
    Route::group(['prefix' => '' , 'namespace' => 'Cart'] , function (){
        Route::resource('carts' , 'CartController' , [
            'only' => ['destroy' , 'store' ,'update']
        ]);
        Route::resource('carts.items' , 'InShoppingCartController' , [
            'only' => ['store' , 'destroy' , 'index']
        ]);
    });

    //Routes cart And store
    Route::group(['prefix' => '' , 'namespace' => 'Product'] , function (){
        Route::get('products/all' , 'ProductsController@all');
        Route::resource('products' , 'ProductsController', [
            'only' => ['index' , 'show' , 'update' , 'delete']
        ]);
        Route::get('tree' , 'CategoriesController@tree');
        Route::get('categories/{category?}' , 'CategoriesController@show');
        Route::resource('categories.products' , 'CategoriesController', ['only' => 'index']);
    });

    //Routes Order
    Route::group(['prefix' => '' , 'namespace' => 'Order'] , function (){
        Route::resource('orders' , 'OrderController' , [
            'only' => ['index' , 'show' , 'update' , 'delete']
        ]);
    });

    //Routes address
    Route::group(['prefix' => '' , 'namespace' => 'Address'] , function (){
        Route::resource('carts.customers.addresses' , 'AddressesController');
        Route::get('carts/{cart}/shipping' , 'ShippingMethodsController@index');
    });

    //Route for states in address
    Route::get('states' , 'Address\\AddressesController@getAddress');
    Route::get('cities/{state}' , 'Address\\AddressesController@getCities');

    //Route payments
    Route::get('payments/{paymentValue}/carts/{cart}', 'Payment\\PaymentsController@show');
    Route::resource('payments' , 'Payment\\PaymentsController' ,[
        'only' => ['index' , 'update' , 'store']
    ]);
    
    //Routes coupons
    Route::group(['prefix' => '' , 'namespace' => 'Coupon'] , function (){
        Route::resource('carts.coupons' , 'CouponsController' , [
            'only'  => ['show']
        ]);
    });

      //Routes geo
    Route::group(['prefix' => '' , 'namespace' => 'Geo'] , function (){
        Route::resource('countries.states' , 'StatesController' , [
            'only'  => ['index']
        ]);  
        Route::resource('states.cities' , 'CitiesController' , [
            'only'  => ['index']
        ]);
    });
    
});