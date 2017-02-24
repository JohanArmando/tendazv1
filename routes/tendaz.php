<?php

$domain = new \Tendaz\Models\Domain\Domain();

$appRoute = function (){

    //Route group for tendaz controller
    Route::group(['namespace' => 'Tendaz' , 'prefix' => ''] , function (){
        //Routes for frontend y global scope
        Route::get('/' ,'FrontendController@index');
        Route::get('/planes' ,'FrontendController@plans');
        Route::get('/contacto' ,'FrontendController@contact');
        Route::get('/sobre-nosotros' ,'FrontendController@about');
        Route::post('/contact' ,'FrontendController@sendEmail');

        //route for login in store
        Route::get('/login' ,'LoginController@showLoginForm');
        Route::post('auth/login' ,'LoginController@login');

        //Route for create store
        Route::get('/crea-tu-tienda' ,'RegisterController@showRegistrationForm');
        Route::post('auth/register' ,'RegisterController@register');

        //Route for reset and send email password
        Route::post('/password/email' ,'ForgotPasswordController@sendResetLinkEmail');
        Route::get('/password/reset/{token} ' ,'ResetPasswordController@showResetForm');
        Route::post('/password/reset' ,'ResetPasswordController@reset');
        Route::get('mepa/payments/notification' , 'Checkout\\NotificationController@notification');

    });
};
Route::group(['domain' => $domain->getDomain()], $appRoute);
Route::group(['domain' => $domain->getTendazWww()], $appRoute);
