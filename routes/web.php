<?php


$domain = new \Tendaz\Models\Domain\Domain();

Route::pattern('subdomain', '^((?!api).)*$');
Route::pattern('subdomain', '^((?!tendaz).)*$');


$appRoute = function (){
    //Route auth
    Auth::routes();

    //route home
    Route::get('/', 'HomeController@home');

    //Routes checkout
    Route::get('checkout' , 'Checkout\CheckoutController@index');

    //iframe
    Route::get('iframe/session', function (){
        return view ('themes.iframeSessionAdmin');
    });

    //products
    Route::get('products/{all?}','HomeController@product')
        ->where('all', '.*');

    //cart
    Route::get('cart/buy','HomeController@cart');

    //cart
    Route::get('detail/{id}','HomeController@detail');

    //contact
    Route::get('contact', 'HomeController@contact');
    Route::post('contact/email', 'HomeController@email');

    //login
    Route::get('auth/login', 'HomeController@login');

    //profile
    Route::get('profile', 'HomeController@profile');

    //Route checkout
    Route::get('checkout2' , 'HomeController@checkout');
    Route::get('checkout' , 'HomeController@checkout');

    //Route Checkout Mercadopago
    Route::get('checkout/success' , 'checkout\\CheckoutController@successMercadopago');
    Route::get('checkout/failure' , 'checkout\\CheckoutController@failureMercadopago');
    Route::get('checkout/pending' , 'checkout\\CheckoutController@pendingMercadopago');

    //Route page build
    Route::get('build' ,'HomeController@build');
};
Route::group(['domain' => '{subdomain}.'.$domain->getDomain(),'middleware' => ['store' , 'theme']] ,$appRoute);
//rutas para los dominios ys ubdominios personalizados
Route::group(['domain' => '{subdomain}.' .'{dev}','middleware' => ['store' , 'theme']],$appRoute);
//rutas para los dominios como .co .es .ar
Route::group(['domain' => '{subdomain}.' .'{dev}'.'.{subtld}','middleware' => ['store' , 'theme']],$appRoute);
//rutas para los dominios como .co .es .ar
Route::group(['domain' => '{subdomain}.' .'{dev}'.'.{subtld}','middleware' => ['store' , 'theme']],$appRoute);
//rutas para los subdominios como subdomain.co subdomain.es subdomain.ar
Route::group(['domain' => '{subdomain}.'.'{domain}.' .'{dev}'.'.{subtld}','middleware' => ['store' , 'theme']],$appRoute);