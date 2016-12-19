const elixir = require('laravel-elixir');
require('laravel-elixir-clear');
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {

    //new-checkout pipes
    mix.scripts([
        'checkout/app.js'
    ] , 'public/new-checkout/js/app.js');
    
    mix.scripts([
        'checkout/Controllers/UsersController.js',
        'checkout/Controllers/globalController.js',
        'checkout/Controllers/navController.js',
        'checkout/Controllers/cartController.js',
        'checkout/Controllers/EmailsController.js',
        'checkout/Controllers/ProfilesController.js',
        'checkout/Controllers/ShippingController.js',
        'checkout/Controllers/PaymentsController.js'
    ] , 'public/new-checkout/js/controllers.js');

    mix.scripts([
        'checkout/Models/User.js',
        'checkout/Models/Cart.js',
        'checkout/Models/Email.js',
        'checkout/Models/Profile.js',
        'checkout/Models/Shipping.js',
        'checkout/Models/Payment.js'
    ] , 'public/new-checkout/js/models.js');

    
    mix.clear(["public/tendaz/css/*.css", "public/tendaz/js/*.js"]);
    mix.sass(['tendaz/tendaz.scss' , 'tendaz/slider.scss'] , 'public/tendaz/css/tendaz.css');
    mix.webpack(['tendaz/app.js'],'public/tendaz/js/tendaz.js');
 
    mix.copy('resources/views/vendor/tendaz/images/slider/*.gif', 'public/tendaz/images/img_slider/');
    mix.copy('resources/views/vendor/tendaz/images/icons/**.*', 'public/tendaz/images/icons/');
    mix.copy('resources/views/vendor/tendaz/images/**.*', 'public/tendaz/images/');
    mix.copy('resources/views/vendor/tendaz/img/**.*', 'public/tendaz/img/');
    mix.copy('node_modules/font-awesome/fonts/**.*', 'public/tendaz/fonts/');
    
});
