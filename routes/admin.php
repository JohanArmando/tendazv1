<?php
$domain = new \Tendaz\Models\Domain\Domain();
Route::group(['domain' => '{subdomain}.'.$domain->getDomain() ,'middleware' => ['store' , 'auth:admins']], function () {


    //Route home
    Route::get('/' , 'HomeController@home');

    //Routes statics
    Route::get('/stats' , 'StaticsController@basic');
    Route::get('/stats/advanced' , 'StaticsController@advanced');
    Route::get('/stats/update' , 'StaticsController@update');

    //Route logout
    Route::post('logout' , 'LoginController@logout');

    //Route Products
    Route::put('products/{variant}/variant' , 'ProductsController@updateVariant');
    Route::get('products/import' , 'ProductsController@import');
    Route::post('products/export' , 'ProductsController@export');
    Route::post('products/import/upload' , 'ProductsController@postImport');
    Route::post('products/import/commit' , 'ProductsController@postCommit');
    Route::get('products/images/{product}' , 'ProductsController@images');
    Route::resource('products' , 'ProductsController');
    Route::get('products/edit/{id}' , 'ProductsController@editProduct');
    Route::put('products/edit/{id}' , 'ProductsController@putProduct');

    //Route Categories
    Route::resource('categories' , 'CategoriesController');

    //Route orders
    Route::get('orders/status' , 'OrdersController@status');
    Route::get('orders/export' , 'OrdersController@getExport');
    Route::post('orders/export/post' , 'OrdersController@postExport');
    Route::resource('orders' , 'OrdersController');

    //Route Providers
    Route::resource('providers' , 'ProvidersController');

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
        Route::get('/app', 'MarketingController@index');
        Route::get('/config-app', 'MarketingController@config');
        Route::get('/robot', 'MarketingController@robot');
        Route::post('/robot', 'MarketingController@postRobot');
        Route::get('/social', 'MarketingController@social');
        Route::put('/social/{socialLogin}', 'MarketingController@postSocial');
        Route::resource('/coupons', 'CouponController');
    });

    //Route Customer
    Route::group(['prefix' => '', 'namespace' => 'Customer'], function() {
        Route::get('customers/export', 'CustomerController@export');
        Route::get('customers/contact', 'CustomerController@contact');
        Route::resource('/customers', 'CustomerController');
    });

    //Route Setting
    Route::group(['prefix' => 'setting', 'namespace' => 'Setting'], function() {
        Route::resource('/payments','PaymentController');
        
        Route::resource('shippings', 'ShippingController',
            ['only' => ['index', 'store', 'update', 'destroy']]);
        
        Route::resource('/domain', 'SettingController@domain');
        
        Route::resource('/locals', 'LocalController',
            ['only' => ['index', 'store', 'update', 'destroy']]);
    });
    
    //Route account
    Route::group(['prefix' => 'account', 'namespace' => 'Account'], function() {
        Route::resource('preferences','AccountController');
        Route::resource('profile','ProfileController');
        Route::resource('invoices','InvoiceController');
        Route::get('plans', 'PlanController@getPlan');
        Route::get('checkout/finish/',function(){return redirect()->to('admin');});
    });
});

