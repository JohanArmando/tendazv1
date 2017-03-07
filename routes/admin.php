<?php
$domain = new \Tendaz\Models\Domain\Domain();
    Route::group(['domain' => '{subdomain}.'.$domain->getDomain() ,'middleware' => ['store' , 'auth:admins' , 'subscription']], function () {
    //Route home
    Route::get('/' ,[
        'uses'  =>  'HomeController@home',
    ]);
    //Routes statics
    Route::get('/stats' , 'StaticsController@basic');
    Route::get('/stats/advanced' , 'StaticsController@advanced')->middleware('plan:estandar,avanzado');
    Route::get('/stats/advanced/map' , 'StaticsController@map');
    Route::get('/stats/update' , 'StaticsController@update');

    //Route logout
    Route::post('logout' , 'LoginController@logout');

    //Route Products
    Route::put('products/{variant}/variant' , 'ProductsController@updateVariant');
    Route::post('products/advanced' , 'ProductsController@storeAdvanced');
    Route::post('products/{id}/variants' , 'ProductsController@storeVariant');
    Route::get('products/import' , 'ProductsController@import');
    Route::post('products/export' , 'ProductsController@export');
    Route::post('products/import/upload' , 'ProductsController@postImport');
    Route::post('products/import/commit' , 'ProductsController@postCommit');
    Route::get('products/images/{product}' , 'ProductsController@images');
    Route::resource('products' , 'ProductsController');
    Route::get('products/edit/{id}' , 'ProductsController@editProduct');
    Route::put('products/edit/{id}' , 'ProductsController@putProduct');
    Route::get('products/images/add/{id}' , 'ProductsController@getImage');
    Route::post('products/refresh/{id}' , 'ProductsController@refreshProduct');
    //Route Categories
    Route::resource('categories' , 'CategoriesController');

    //Route options variants
    Route::get('options/{id}/values' , 'OptionsController@values');
    Route::post('options/{id}/values' , 'OptionsController@storeValues');
    Route::post('variants/{id}/images' , 'ProductsController@storeImages');
    Route::put('variants/{id}' , 'ProductsController@updateVariant2');
    Route::delete('variants/{id}' , 'ProductsController@removeVariant');
    Route::post('variants/{variant_id}/values/{value_id}' , 'ProductsController@addValue');
    Route::delete('variants/{variant_id}/values/{value_id}' , 'ProductsController@removeValue');
    Route::delete('variants/{variant_id}/images/{image_id}' , 'ProductsController@deleteImages');
    Route::resource('options' , 'OptionsController');


    //Route orders
    Route::get('orders/status' , 'OrdersController@status');
    Route::get('orders/export' , 'OrdersController@getExport');
    Route::get('orders/print/{id}' , 'OrdersController@printOrder');
    Route::post('orders/export/post' , 'OrdersController@postExport');
    Route::put('orders/update/note/{id}' , 'OrdersController@updateNote');
    Route::resource('orders' , 'OrdersController');

    //Route Providers
    Route::resource('providers' , 'ProvidersController');
    Route::get('providers/selectCity/{id}' , 'ProvidersController@select');

    //Route help
    Route::group(['prefix' => 'help' , 'namespace' => 'Help'], function() {
        Route::get('/', 'HelpController@index');
        Route::get('/video', 'HelpController@video');
        Route::get('/chat', 'HelpController@chat');
        Route::get('/comments', 'HelpController@comments');
        Route::resource('/tickets', 'TicketController');
    });

    //Route design
    Route::group(['prefix' => 'design', 'namespace' => 'Design'], function() {
        Route::get('/theme', 'DesignController@index');
        Route::post('/theme/change', 'DesignController@change');
        Route::get('/logo', 'DesignController@logo');
        Route::put('/logo/{id}', 'DesignController@postLogo');
        Route::put('/sliders/{id}', 'DesignController@slider');
        Route::get('/build', 'DesignController@build');
        Route::post('/build', 'DesignController@postBuild');
        Route::get('/social_network', 'DesignController@network');
        Route::put('/social_network', 'DesignController@postNetwork');
        Route::get('/info', 'DesignController@info');
        Route::put('/info', 'DesignController@postInfo');
    });

    //Route marketing
    Route::group(['prefix' => 'marketing', 'namespace' => 'Marketing'], function() {
        Route::get('/app', 'MarketingController@index')->middleware('plan:avanzado');
        Route::get('/config-app', 'MarketingController@config');
        Route::get('/robot', 'MarketingController@robot')->middleware('plan:avanzado');
        Route::post('/robot', 'MarketingController@postRobot');
        Route::get('/social', 'MarketingController@social');
        Route::get('/social/tutorial', 'MarketingController@tutorial');
        Route::put('/social/{socialLogin}', 'MarketingController@postSocial');
        Route::resource('/coupons', 'CouponController');
    });

    //Route Customer
    Route::group(['prefix' => '', 'namespace' => 'Customer'], function() {
        Route::get('customers/export', 'CustomerController@export');
        Route::post('customers/export', 'CustomerController@postExport');
        Route::get('customers/contact', 'CustomerController@contact');
        Route::resource('/customers', 'CustomerController');
    });

    //Route Setting
    Route::group(['prefix' => 'setting', 'namespace' => 'Setting'], function() {
        Route::resource('/payments','PaymentController');

        Route::resource('shippings', 'ShippingController',
            ['only' => ['index', 'store', 'update', 'destroy']]);
        //meli
        Route::get('/mercadolibre',function(){return redirect()->back();})->middleware('plan:estandar,avanzado');
        //setting domain
        Route::get('/domain', 'NameCheapController@getIndex');
        Route::get('/domain/create', 'NameCheapController@store');
        Route::get('/domain/main/{uuid}', 'NameCheapController@main');
        Route::get('/domain/verify/{uuid}', 'NameCheapController@getVerify');
        Route::post('/domain/verify/{uuid}', 'NameCheapController@postVerify');
        Route::post('/domain/check', 'NameCheapController@check');
        Route::post('/domain/buy', 'NameCheapController@getDomainPayment');
        Route::delete('/domain/destroy/{uuid}', 'NameCheapController@postDelete');
        
        Route::resource('/locals', 'LocalController',
            ['only' => ['index', 'store', 'update', 'destroy']]);
    });
    //Route for payment plan


    //Route account
    Route::group(['prefix' => 'account', 'namespace' => 'Account'], function() {
        Route::resource('preferences','AccountController');
        Route::resource('profile','ProfileController');
        Route::resource('invoices','InvoiceController');

        Route::get('plans', [
            'uses' => 'PlanController@index',
            'notMiddleware' => 'subscription'
        ]);

        Route::post('plans/swap/{plan}', [
            'uses' => 'PlanController@swap',
            'notMiddleware' => 'subscription'
        ]);
        
        Route::post('checkout/finish/',[
            'uses' => 'SubscriptionController@doSubscription',
            'notMiddleware' => 'subscription'
        ]);

        Route::get('checkout/finish/',[
            'uses' => 'SubscriptionController@finish',
            'notMiddleware' => 'subscription'
        ]);

        Route::get('checkout/plans',[
            'uses' => 'SubscriptionController@plans',
            'notMiddleware' => 'subscription'
        ]);


        Route::get('checkout/start/',[
            'uses' => 'SubscriptionController@start',
            'notMiddleware' => 'subscription'
        ]);
    });
});

