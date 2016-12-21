<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatabaseTendaz extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $request = new Illuminate\Http\Request();

        //
        // NOTE -- cities
        // --------------------------------------------------


        Schema::create('cities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid', 255)->index();
            $table->string('name');
            $table->integer('state_id')->unsigned();
            $table->string('abbr' , 60)->index();
            $table->timestamps();
        });


        //
        // NOTE -- carts
        // --------------------------------------------------


        Schema::create('carts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('secure_key')->index()->unique();
            $table->integer('address_invoice_id')->unsigned()->nullable();
            $table->integer('address_shipping_id')->unsigned()->nullable();
            $table->integer('customer_id')->unsigned()->nullable();
            $table->integer('shop_id')->unsigned();
            $table->integer('coupon_id')->unsigned()->nullable();
            $table->enum('status' , ['open' , 'closed'])->default('open');
            $table->timestamps();
        });

        //
        // NOTE -- carts_products
        // --------------------------------------------------


        Schema::create('cart_products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cart_id')->unsigned();
            $table->integer('item_id')->unsigned();
            $table->integer('quantity');
            $table->timestamps();
        });

        //
        // NOTE -- social_login
        // --------------------------------------------------

        Schema::create('social_login', function ($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->string('app_id' , 60)->nullable();
            $table->string('app_secret' , 60)->nullable();
            $table->string('provider' , 60)->nullable();
            $table->unsignedInteger('shop_id')->unsigned();
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });

        //
        // NOTE -- plan
        // --------------------------------------------------

        Schema::create('plans', function ($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->string('name' , 60)->nullable();
            $table->string('image' , 60)->nullable();
            $table->text('description')->nullable();
            $table->boolean('main');
            $table->decimal('price' , 15 , 2);
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });


        //
        // NOTE -- category_shop
        // --------------------------------------------------

        Schema::create('category_shop', function ($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->string('name' , 60)->nullable();
            $table->string('value' , 60)->nullable();
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });

        //
        // NOTE -- theme
        // --------------------------------------------------

        Schema::create('themes', function ($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->string('name' , 60)->nullable();
            $table->string('directory' , 60)->nullable();
            $table->string('path' , 60)->nullable();
            $table->boolean('active')->default("1");
            $table->integer('products_per_page');
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });

        //
        // NOTE -- shop
        // --------------------------------------------------

        Schema::create('shops', function ($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->string('name' , 60)->nullable();
            $table->string('logo' , 60)->nullable();
            $table->boolean('active')->default("1");
            $table->string('slug')->unique();
            $table->string('slider1')->nullable();
            $table->string('slider2')->nullable();
            $table->string('slider3')->nullable();
            $table->unsignedInteger('theme_id')->unsigned();
            $table->unsignedInteger('user_id')->unsigned();
            $table->unsignedInteger('country_base_operation_id')->unsigned();
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });

        //
        // NOTE -- Stores
        // --------------------------------------------------

        Schema::create('stores', function ($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->enum('phone_type' , ['mobile' , 'fax' ,  'work' , 'home' ,'other']);
            $table->string('number_phone')->nullable();
            $table->string('code_country')->nullable();
            $table->text('conditions')->nullable();
            $table->string('number_local')->nullable();
            $table->string('address_1')->nullable();
            $table->string('address_2')->nullable();
            $table->string('lat')->nullable();
            $table->string('lon')->nullable();
            $table->string('blog')->nullable();
            $table->string('pinterest')->nullable();
            $table->string('instagram')->nullable();
            $table->string('google_plus')->nullable();
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->boolean('enabled')->default("1");
            $table->boolean('build')->default(0);
            $table->text('message')->nullable();
            $table->text('name')->nullable();
            $table->unsignedInteger('shop_id')->unsigned();
            $table->unsignedInteger('category_shop_id')->unsigned();
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });

        //
        // NOTE -- domains
        // --------------------------------------------------

        Schema::create('domains', function ($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->string('domain')->nullable();
            $table->string('name')->nullable();
            $table->string('ssl')->nullable();
            $table->boolean('main');
            $table->boolean('active');
            $table->string('state')->nullable();
            $table->unsignedInteger('shop_id')->unsigned();
            $table->unsignedInteger('domain_id')->unsigned()->nullable();
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });

        //
        // NOTE -- payments
        // --------------------------------------------------

        Schema::create('payments', function ($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->string('state')->nullable();
            $table->decimal('amount' , 15 , 2)->nullable();
            $table->string('transaction_id')->nullable();
            $table->unsignedInteger('subscription_id')->unsigned();
            $table->unsignedInteger('plan_id')->unsigned();
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });

        //
        // NOTE -- subscriptions
        // --------------------------------------------------

        Schema::create('subscriptions', function ($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index()->default(\Webpatser\Uuid\Uuid::generate(4)->string);
            $table->decimal('amount' , 15 , 2)->nullable();
            $table->enum('state' , ['active' , 'cancelled'])->default('active');
            $table->unsignedInteger('shop_id')->unsigned();
            $table->unsignedInteger('plan_id')->unsigned();
            $table->timestamp('start_at')->nullable();
            $table->timestamp('end_at')->nullable();
            $table->timestamp('trial_at')->nullable();
        });
        //
        // NOTE -- history_subscription
        // --------------------------------------------------

        Schema::create('history_subscription', function ($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->string('state')->nullable();
            $table->unsignedInteger('subscription_id')->unsigned();
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });

        //
        // NOTE -- payment_method
        // --------------------------------------------------

        Schema::create('payment_methods', function ($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->string('name');
            $table->string('path');
            $table->text('cost_by_trans_deb');
            $table->text('cost_by_trans_cre');
            $table->text('days');
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });

        //
        // NOTE -- payment_values
        // --------------------------------------------------

        Schema::create('payment_values', function ($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->enum('currency' , ['USD' , 'BRL' , 'COP']);
            $table->enum('mode' , ['redirect' , 'modal']);
            $table->string('max_installments')->nullable();
            $table->string('installments_without_interest')->nullable();
            $table->string('installments_active')->nullable();
            $table->string('custom_name')->nullable();
            $table->string('instructions')->nullable();
            $table->string('discount')->nullable();
            $table->string('account')->nullable();
            $table->string('enc')->nullable();
            $table->string('merchant_id')->nullable();
            $table->string('client_secret')->nullable();
            $table->string('client_id')->nullable();
            $table->unsignedInteger('shop_id')->unsigned();
            $table->unsignedInteger('payment_method_id')->unsigned();
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });

        //
        // NOTE -- tickets
        // --------------------------------------------------

        Schema::create('tickets', function ($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->enum('state' , ['open' , 'closed' , 'pause'])->default('open');
            $table->string('subject')->nullable();
            $table->string('description' , 2000)->nullable();
            $table->integer('user_id')->unsigned();
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });

        //
        // NOTE -- tickets_comments
        // --------------------------------------------------

        Schema::create('tickets_comments', function ($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->string('content' , 1000)->nullable();
            $table->integer('user_id')->unsigned();
            $table->integer('ticket_id')->unsigned();
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });


        //
        // NOTE -- trends
        // --------------------------------------------------

        Schema::create('trends', function ($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->integer('user_id')->unsigned();
            $table->integer('hits')->default('0');
            $table->integer('trend_id');
            $table->string('trend_type');
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });

        //
        // NOTE -- trends_preferences
        // --------------------------------------------------

        Schema::create('trends_preferences', function ($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->integer('email_frequency');
            $table->string('products_black');
            $table->string('categories_black');
            $table->integer('coupon_id')->unsigned();
            $table->integer('shop_id')->unsigned();
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });

        //*********************************************************   TENDAZ *****************************************************************************************//
        //
        // NOTE -- countries
        // --------------------------------------------------

        Schema::create('countries', function ($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->string('name' , 60);
            $table->string('abbr' , 60);
            $table->boolean('active_shipping')->default("0");
            $table->boolean('active_billing')->default("0");
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });

        //
        // NOTE -- states
        // --------------------------------------------------

        Schema::create('states', function ($table) {
            $table->increments('id')->unsigned();
            $table->string('name' , 255)->nullable();
            $table->string('uuid', 255)->index();
            $table->string('abbr' , 60);
            $table->unsignedInteger('country_id')->unsigned();
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });


        //
        // NOTE -- address_histories
        // --------------------------------------------------

        Schema::create('address_history', function ($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->string('street', 50)->nullable();
            $table->string('complement', 50)->nullable();
            $table->string('neighborhood', 50)->nullable();
            $table->integer('state_id')->unsigned()->nullable();
            $table->integer('city_id')->unsigned()->nullable();
            $table->integer('country_id')->unsigned()->nullable();
            $table->integer('address_id')->unsigned()->nullable();
            $table->string('receiverName', 50)->nullable();
            $table->string('longitude')->nullable();
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });


        //
        // NOTE -- addresses
        // --------------------------------------------------

        Schema::create('addresses', function ($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->string('street', 50)->nullable();
            $table->string('name', 50)->nullable();
            $table->string('complement', 50)->nullable();
            $table->string('neighborhood', 50)->nullable();
            $table->integer('state_id')->unsigned()->nullable();
            $table->integer('city_id')->unsigned()->nullable();
            $table->integer('country_id')->unsigned()->nullable();
            $table->string('receiverName')->nullable();
            $table->string('longitude')->nullable();
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });

//
// NOTE -- categories
// --------------------------------------------------

        Schema::create('categories', function($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->string('name', 255)->nullable();
            $table->string('slug', 255)->nullable();
            $table->string('description', 255)->nullable();
            $table->unsignedInteger('shop_id')->nullable();
            $table->unsignedInteger('parent_id')->nullable();
            $table->unsignedInteger('lft')->nullable();
            $table->unsignedInteger('rgt')->nullable();
            $table->unsignedInteger('depth')->nullable();
            $table->boolean('blacklist')->default('0');
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });


        //
        // NOTE -- category_product
        // --------------------------------------------------

        Schema::create('category_product', function($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->unsignedInteger('category_id')->nullable()->unsigned();
            $table->unsignedInteger('product_id')->nullable()->unsigned();
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });


        //
        // NOTE -- consults
        // --------------------------------------------------

        Schema::create('consults', function($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->string('phone', 60)->nullable();
            $table->text('message')->nullable();
            $table->boolean('allowed')->nullable();
            $table->unsignedInteger('customer_id')->nullable()->unsigned();
            $table->unsignedInteger('shop_id')->unsigned();
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });


        //
        // NOTE -- coupon_categories
        // --------------------------------------------------

        Schema::create('coupon_category', function($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->unsignedInteger('coupon_id')->unsigned();
            $table->unsignedInteger('category_id')->unsigned();
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });


        //
        // NOTE -- coupon_redemption
        // --------------------------------------------------

        Schema::create('coupon_redemption', function($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->unsignedInteger('coupon_id')->unsigned();
            $table->unsignedInteger('order_id')->unsigned();
            $table->bigInteger('total_discount')->nullable();
            $table->timestamp('redemption_date')->default(\Carbon\Carbon::now());
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });


        //
        // NOTE -- coupons
        // --------------------------------------------------

        Schema::create('coupons', function($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->string('code', 255);
            $table->enum('type', array('percentage','absolute','shipping'))->default("percentage");
            $table->integer('value');
            $table->boolean('limit_uses')->default('0');
            $table->tinyInteger('limit_dates')->default('0');
            $table->integer('max_uses');
            $table->tinyInteger('available')->default("1");
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->unsignedInteger('shop_id')->unsigned();
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });


        //
        // NOTE -- customers_addresses
        // --------------------------------------------------

        Schema::create('customer_address', function($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->unsignedInteger('customer_id')->unsigned();
            $table->unsignedInteger('address_id')->unsigned();
            $table->boolean('isActive')->default("1");
            $table->boolean('isShipping')->default('1');
            $table->boolean('isBilling')->default('0');
            $table->boolean('isPrimary')->default('0');
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });

        //
        // NOTE -- order_history
        // --------------------------------------------------

        Schema::create('order_history', function($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->unsignedInteger('order_id')->unsigned();
            $table->string('order_status', 255)->nullable();
            $table->date('date')->nullable();
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });


        //
        // NOTE -- images
        // --------------------------------------------------

        Schema::create('images', function($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->string('name', 255)->nullable();
            $table->string('url')->nullable();
            $table->unsignedInteger('variant_id')->unsigned();
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });


        //
        // NOTE -- locals
        // --------------------------------------------------

        Schema::create('locals', function($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->string('name', 60);
            $table->text('description')->nullable();
            $table->boolean('principal');
            $table->unsignedInteger('shop_id')->unsigned();
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });


        //
        // NOTE -- order_items
        // --------------------------------------------------

        Schema::create('order_item', function($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->unsignedInteger('quantity');
            $table->unsignedInteger('order_id')->unsigned();
            $table->unsignedInteger('variant_id')->unsigned();
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });


        //
        // NOTE -- order_status_code
        // --------------------------------------------------

        Schema::create('order_status', function($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->string('name', 60);
            $table->string('color', 60);
            $table->text('description');
            $table->text('accion');
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });


        //
        // NOTE -- orders
        // --------------------------------------------------

        Schema::create('orders', function($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->string('email', 255);
            //total de la orden
            $table->decimal('total', 15,2)->nullable();
            //el total del descuento
            $table->decimal('total_discount', 15,2)->nullable();
            //data agregado por el usuario
            $table->string('name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('identification')->nullable();
            //esto es si habia impuestos aplicados a los productos
            $table->decimal('total_tax', 15,2)->nullable();
            $table->decimal('total_inc_tax', 15,2)->nullable();
            $table->decimal('total_exc_tax', 15,2)->nullable();
            $table->decimal('total_products', 15,2)->nullable();
            $table->decimal('total_shipping', 15,2)->nullable();
            //estos es si el envio tiene algun impuesto extra
            $table->decimal('total_shipping_exc_tax', 15,2)->nullable();
            $table->decimal('total_shipping_inc_tax', 15,2)->nullable();
            $table->text('note')->nullable();
            $table->decimal('shipping', 10,2)->nullable();
            $table->integer('cart_id')->unsigned();
            $table->foreign('cart_id')->references('id')->on('carts');
            $table->unsignedInteger('local_id')->nullable()->unsigned();
            $table->unsignedInteger('customer_id')->nullable()->unsigned();
            $table->unsignedInteger('shop_id')->unsigned();
            $table->unsignedInteger('order_status')->unsigned();
            $table->unsignedInteger('shipping_method_id')->nullable()->unsigned();
            $table->unsignedInteger('current_state')->nullable()->unsigned();
            $table->unsignedInteger('shipping_address_id')->nullable()->unsigned();
            $table->unsignedInteger('billing_address_id')->nullable()->unsigned();
            $table->enum('payment_type', array('custom','credit_card','transfer_bank','ticket'))->default("custom");
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });


        //
        // NOTE -- password_resets
        // --------------------------------------------------

        Schema::create('password_resets', function($table) {
            $table->string('email', 255);
            $table->string('token', 255);
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
        });


        //
        // NOTE -- products
        // --------------------------------------------------

        Schema::create('products', function($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->string('name', 255)->nullable();
            $table->string('slug', 255)->nullable();
            $table->string('seo_title', 255)->nullable();
            $table->text('seo_description')->nullable();
            $table->text('description')->nullable();
            $table->boolean('publish')->default('1');
            $table->boolean('blacklist')->default('0');
            $table->double('large' , 15 , 2)->default('0.00');
            $table->double('height' , 15 , 2)->default('0');
            $table->double('width' , 15 , 2 )->default('0');
            $table->double('dimension' , 15 , 2 )->default('0');
            $table->unsignedInteger('shop_id')->nullable()->unsigned();
            $table->unsignedInteger('provider_id')->nullable()->unsigned();
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });

        //
        // NOTE -- sections
        // --------------------------------------------------

        Schema::create('sections', function($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->boolean('primary')->default('1');
            $table->boolean('promotion')->default('1');
            $table->unsignedInteger('product_id')->nullable()->unsigned();
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });

        //
        // NOTE -- variants
        // --------------------------------------------------

        Schema::create('variants', function($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->string('sku', 255)->nullable()->index();
            $table->decimal('price', 15 , 2)->nullable();
            $table->decimal('price_declared', 15 , 2)->nullable();
            $table->decimal('promotional_price', 15 , 2)->nullable();
            $table->decimal('weight', 15 , 2)->nullable();
            $table->integer('stock')->default("-1");
            $table->boolean('show')->default('1');
            $table->unsignedInteger('product_id')->nullable()->unsigned();
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });


        //
        // NOTE -- options
        // --------------------------------------------------

        Schema::create('options', function($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->string('name');
            $table->unsignedInteger('shop_id')->nullable()->unsigned();
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });


        //
        // NOTE -- option_values
        // --------------------------------------------------


        Schema::create('option_values', function($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->string('name')->nullable();
            $table->string('attribute')->default('other');
            $table->unsignedInteger('option_id')->nullable()->unsigned();
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });



        //
        // NOTE -- option_values_variants
        // --------------------------------------------------

        Schema::create('option_value_variant', function($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->unsignedInteger('option_value_id')->nullable()->unsigned();
            $table->unsignedInteger('variant_id')->nullable()->unsigned();
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });


        //
        // NOTE -- restrictions
        // --------------------------------------------------

        Schema::create('restrictions', function($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->unsignedInteger('coupon_id')->unsigned();
            $table->decimal('min_price' , 15 ,2)->nullable();
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });


        //
        // NOTE -- sends
        // --------------------------------------------------

        Schema::create('shipping_methods', function($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->string('name', 60);
            $table->decimal('cost' , 15 , 2)->default(0);
            $table->decimal('min_price' , 15 , 2)->default(-1);
            $table->decimal('max_price' , 15 ,2)->default(-1);
            $table->decimal('min_weight' , 15 , 2)->default(-1);
            $table->decimal('max_weight' , 15 ,2)->default(-1);
            $table->enum('type' ,['servi' , 'custom'])->nullable();
            $table->integer('country_id')->unsigned();
            $table->unsignedInteger('shop_id')->unsigned();
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });


        //
        // NOTE -- social_auths
        // --------------------------------------------------

        Schema::create('social_auths', function($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->unsignedInteger('customer_id')->nullable();
            $table->string('provider', 255);
            $table->string('uid_provider', 255);
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });


        //
        // NOTE -- taxes
        // --------------------------------------------------

        Schema::create('taxes', function($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->string('name', 255);
            $table->decimal('rate', 5, 2);
            $table->boolean('active')->default("1");
            $table->unsignedInteger('shop_id')->unsigned();
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });


        //
        // NOTE -- taxes_order_item
        // --------------------------------------------------

        Schema::create('tax_order_item', function($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->decimal('unit_amount', 15, 2);
            $table->decimal('total_amount', 15, 2);
            $table->unsignedInteger('order_item_id')->unsigned();
            $table->unsignedInteger('tax_id')->unsigned();
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });

        //
        // NOTE -- product_country_tax
        // --------------------------------------------------

        Schema::create('product_country_tax', function($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->unsignedInteger('product_id')->unsigned();
            $table->unsignedInteger('country_id')->unsigned();
            $table->unsignedInteger('tax_id')->unsigned();
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });

        //
        // NOTE -- shipping_country_tax
        // --------------------------------------------------

        Schema::create('shipping_country_tax', function($table) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->unsignedInteger('shipping_id')->unsigned();
            $table->unsignedInteger('country_id')->unsigned();
            $table->unsignedInteger('tax_id')->unsigned();
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });
        //
        // NOTE -- customers
        // --------------------------------------------------

        Schema::create('customers', function($table) use ($request) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->string('name', 255)->nullable();
            $table->string('last_name', 255)->nullable();
            //$table->enum('type', array('customer', "reseller" , "tendaz" ,'admin'))->default("customer");
            $table->string('phone', 255)->nullable();
            $table->boolean('active')->default("1");
            $table->string('email', 255);
            $table->string('password', 60)->nullable();
            $table->string('identification', 60)->nullable();
            $table->text('notes')->nullable();
            $table->string('profile', 60)->nullable();
            $table->boolean('social')->nullable();
            $table->string('current_sign_in_ip')->default($request->ip() ? $request->ip() : '127.0.0.1');
            $table->string('last_sign_in_ip')->default($request->ip() ? $request->ip() : '127.0.0.1');
            $table->dateTime('current_sign_in_at')->default(\Carbon\Carbon::now());
            $table->dateTime('last_sign_in_at')->default(\Carbon\Carbon::now());
            $table->integer('sign_in_count')->default(1);
            $table->string('remember_token', 100)->nullable();
            $table->unsignedInteger('country_id')->unsigned();
            $table->unsignedInteger('shop_id')->unsigned();
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });

        //
        // NOTE -- users
        // --------------------------------------------------

        Schema::create('users', function($table) use ($request) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->string('name', 255)->nullable();
            $table->string('last_name', 255)->nullable();
            $table->enum('type', array("admin" , "superAdmin" ,'reseller'))->default("admin");
            $table->string('phone', 255)->nullable();
            $table->boolean('active')->default("1");
            $table->string('email', 255)->unique();
            $table->string('password', 60);
            $table->string('identification', 60)->nullable();
            $table->text('notes')->nullable();
            $table->string('current_sign_in_ip')->default($request->ip() ? $request->ip() : '127.0.0.1');
            $table->string('last_sign_in_ip')->default($request->ip() ? $request->ip() : '127.0.0.1');
            $table->dateTime('current_sign_in_at')->default(\Carbon\Carbon::now());
            $table->dateTime('last_sign_in_at')->default(\Carbon\Carbon::now());
            $table->integer('sign_in_count')->default(1);
            $table->string('image', 60)->nullable();
            $table->string('remember_token', 100)->nullable();
            $table->unsignedInteger('country_id')->unsigned();
            $table->boolean('admin')->default('0');
            $table->dateTime('last_email')->nullable();
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });

        //
        // NOTE -- code_ser
        // --------------------------------------------------

        Schema::create('code_ser', function($table) use ($request) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->integer('user_id')->unsigned();
            $table->string('ser', 255);
            $table->enum('type_charge', ['kika' , 'range']);
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });

        //
        // NOTE -- config_ser
        // --------------------------------------------------

        Schema::create('config_ser', function($table) use ($request) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->integer('code_ser_id')->unsigned();
            $table->double('min_range', 15 , 2);
            $table->double('max_range', 15 , 2);
            $table->double('ki', 15 , 2);
            $table->double('ka', 15 , 2);
            $table->double('collection_rate', 15 , 2);
            $table->double('sobreflete', 15 , 2);
            $table->enum('journey', ['national' , 'urban' , 'zonal' , 'special_trip']);
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });

        //
        // NOTE -- users
        // --------------------------------------------------

        Schema::create('providers', function($table) use ($request) {
            $table->increments('id')->unsigned();
            $table->string('uuid', 255)->index();
            $table->string('name', 255)->nullable();
            $table->string('last_name', 255)->nullable();
            $table->string('phone', 255)->nullable();
            $table->string('email', 255)->unique();
            $table->unsignedInteger('country_id')->unsigned();
            $table->unsignedInteger('state_id')->unsigned();
            $table->unsignedInteger('city_id')->unsigned();
            $table->unsignedInteger('shop_id')->nullable()->unsigned();
            $table->timestamp('created_at')->default(\Carbon\Carbon::now());
            $table->timestamp('updated_at')->default(\Carbon\Carbon::now());
        });
        
        //
        // NOTE -- jobs
        // --------------------------------------------------

        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('queue');
            $table->longText('payload');
            $table->tinyInteger('attempts')->unsigned();
            $table->unsignedInteger('reserved_at')->nullable();
            $table->unsignedInteger('available_at');
            $table->unsignedInteger('created_at');
            $table->index(['queue', 'reserved_at']);
        });

        //
        // NOTE -- states_foreign
        // --------------------------------------------------

        Schema::table('states', function($table) {
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
        });


        //
        // NOTE -- address_historyforeign
        // --------------------------------------------------

        Schema::table('address_history', function($table) {
            $table->foreign('address_id')->references('id')->on('addresses')->onDelete('cascade');
        });


        //
        // NOTE -- category_product_foreign
        // --------------------------------------------------

        Schema::table('category_product', function($table) {
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });

        //
        // NOTE -- consults_foreign
        // --------------------------------------------------

        Schema::table('consults', function($table) {
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade') ;
            $table->foreign('shop_id')->references('id')->on('shops')->onDelete('cascade');
        });

//
        // NOTE -- consults_foreign
        // --------------------------------------------------

        Schema::table('providers', function($table) {
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade') ;
            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade') ;
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade') ;
            $table->foreign('shop_id')->references('id')->on('shops')->onDelete('cascade');
        });

        //
        // NOTE -- coupon_categories_foreign
        // --------------------------------------------------

        Schema::table('coupon_category', function($table) {
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('coupon_id')->references('id')->on('coupons')->onDelete('cascade');
        });

        //
        // NOTE -- coupon_redemption_foreign
        // --------------------------------------------------

        Schema::table('coupon_redemption', function($table) {
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('coupon_id')->references('id')->on('coupons')->onDelete('cascade');
        });//

        // NOTE -- customer_address_foreign
        // --------------------------------------------------

        Schema::table('customer_address', function($table) {
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('address_id')->references('id')->on('addresses')->onDelete('cascade');
        });


        //
        // NOTE -- order_history_foreign
        // --------------------------------------------------

        Schema::table('order_history', function($table) {
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
        });

        //
        // NOTE -- images_foreign
        // --------------------------------------------------

        Schema::table('images', function($table) {
            $table->foreign('variant_id')->references('id')->on('variants')->onDelete('cascade');
        });

        //
        // NOTE -- order_item_foreign
        // --------------------------------------------------

        Schema::table('order_item', function($table) {
            $table->foreign('variant_id')->references('id')->on('variants')->onDelete('cascade');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
        });

        //
        // NOTE -- orders_foreign
        // --------------------------------------------------

        Schema::table('orders', function($table) {
            $table->foreign('local_id')->references('id')->on('locals');
            $table->foreign('order_status')->references('id')->on('order_status');
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('shop_id')->references('id')->on('shops');
            $table->foreign('shipping_method_id')->references('id')->on('shipping_methods');
            $table->foreign('current_state')->references('id')->on('order_status');
            $table->foreign('shipping_address_id')->references('id')->on('customer_address');
            $table->foreign('billing_address_id')->references('id')->on('customer_address');;
        });

        //
        // NOTE -- sections_foreign
        // --------------------------------------------------

        Schema::table('sections', function($table) {
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });

        //
        // NOTE -- variants_foreign
        // --------------------------------------------------

        Schema::table('variants', function($table) {
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });


        //
        // NOTE -- option_foreing
        // --------------------------------------------------

        Schema::table('options', function($table) {
            $table->foreign('shop_id')->references('id')->on('shops')->onDelete('cascade');
        });

        //
        // NOTE -- option_values_foreign
        // --------------------------------------------------

        Schema::table('option_values', function($table) {
            $table->foreign('option_id')->references('id')->on('options')->onDelete('cascade');
        });

        //
        // NOTE -- option_values_variants_foreign
        // --------------------------------------------------

        Schema::table('option_value_variant', function($table) {
            $table->foreign('option_value_id')->references('id')->on('option_values')->onDelete('cascade');
            $table->foreign('variant_id')->references('id')->on('variants')->onDelete('cascade');
        });

        //
        // NOTE -- restrictions_foreign
        // --------------------------------------------------

        Schema::table('restrictions', function($table) {
            $table->foreign('coupon_id')->references('id')->on('coupons')->onDelete('cascade');
        });

        //
        // NOTE -- social_auths_foreign
        // --------------------------------------------------

        Schema::table('social_auths', function($table) {
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        });

        //
        // NOTE -- tax_order_item_foreign
        // --------------------------------------------------

        Schema::table('tax_order_item', function($table) {
            $table->foreign('tax_id')->references('id')->on('taxes');
            $table->foreign('order_item_id')->references('id')->on('order_item')->onDelete('cascade');
        });

        //
        // NOTE -- product_country_tax_foreign
        // --------------------------------------------------

        Schema::table('product_country_tax', function($table) {
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->foreign('tax_id')->references('id')->on('taxes')->onDelete('cascade');
        });

        //
        // NOTE -- shipping_country_tax_foreign
        // --------------------------------------------------

        Schema::table('shipping_country_tax', function($table) {
            $table->foreign('shipping_id')->references('id')->on('shipping_methods')->onDelete('cascade');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->foreign('tax_id')->references('id')->on('taxes')->onDelete('cascade');
        });

        //
        // NOTE -- customers_foreign
        // --------------------------------------------------

        Schema::table('customers', function($table) {
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->foreign('shop_id')->references('id')->on('shops')->onDelete('cascade');
        });

        //
        // NOTE -- shops_foreign
        // --------------------------------------------------

        Schema::table('shops', function($table) {
            $table->foreign('theme_id')->references('id')->on('themes');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('country_base_operation_id')->references('id')->on('countries');
        });

        //
        // NOTE -- stores_foreign
        // --------------------------------------------------

        Schema::table('stores', function($table) {
            $table->foreign('shop_id')->references('id')->on('shops')->onDelete('cascade');
            $table->foreign('category_shop_id')->references('id')->on('category_shop');
        });

        //
        // NOTE -- stores_foreign
        // --------------------------------------------------

        Schema::table('domains', function($table) {
            $table->foreign('shop_id')->references('id')->on('shops')->onDelete('cascade');
            $table->foreign('domain_id')->references('id')->on('domains')->onDelete('cascade');
        });

        //
        // NOTE -- payments_foreign
        // --------------------------------------------------

        Schema::table('payments', function($table) {
            $table->foreign('plan_id')->references('id')->on('plans')->onDelete('cascade');
            $table->foreign('subscription_id')->references('id')->on('subscriptions')->onDelete('cascade');
        });

        //
        // NOTE -- subscriptions_foreign
        // --------------------------------------------------

        Schema::table('subscriptions', function($table) {
            $table->foreign('plan_id')->references('id')->on('plans')->onDelete('cascade');
            $table->foreign('shop_id')->references('id')->on('shops')->onDelete('cascade');
        });
        //
        // NOTE -- history_subscription_foreign
        // --------------------------------------------------

        Schema::table('history_subscription', function($table) {
            $table->foreign('subscription_id')->references('id')->on('subscriptions')->onDelete('cascade');
        });


        //
        // NOTE -- payment_methods_foreign
        // --------------------------------------------------

        Schema::table('payment_values', function($table) {
            $table->foreign('payment_method_id')->references('id')->on('payment_methods')->onDelete('cascade');
            $table->foreign('shop_id')->references('id')->on('shops')->onDelete('cascade');
        });

        //
        // NOTE -- products_foreign
        // --------------------------------------------------

        Schema::table('products', function($table) {
            $table->foreign('shop_id')->references('id')->on('shops')->onDelete('cascade');
            $table->foreign('provider_id')->references('id')->on('shops')->onDelete('cascade');
        });

        //
        // NOTE -- tax_foreign
        // --------------------------------------------------

        Schema::table('taxes', function($table) {
            $table->foreign('shop_id')->references('id')->on('shops')->onDelete('cascade');
        });

        //
        // NOTE -- shipping_methods_foreign
        // --------------------------------------------------

        Schema::table('shipping_methods', function($table) {
            $table->foreign('shop_id')->references('id')->on('shops')->onDelete('cascade');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
        });

        //
        // NOTE -- coupons_foreign
        // --------------------------------------------------

        Schema::table('coupons', function($table) {
            $table->foreign('shop_id')->references('id')->on('shops')->onDelete('cascade');
        });

        //
        // NOTE -- coupons_foreign
        // --------------------------------------------------

        Schema::table('locals', function($table) {
            $table->foreign('shop_id')->references('id')->on('shops')->onDelete('cascade');
        });

        //
        // NOTE -- coupons_foreign
        // --------------------------------------------------

        Schema::table('categories', function($table) {
            $table->foreign('shop_id')->references('id')->on('shops')->onDelete('cascade');
        });

        //
        // NOTE -- social_login_foreign
        // --------------------------------------------------

        Schema::table('social_login', function($table) {
            $table->foreign('shop_id')->references('id')->on('shops')->onDelete('cascade');
        });

        //
        // NOTE -- carts
        // --------------------------------------------------

        Schema::table('carts', function($table) {
            $table->foreign('address_invoice_id')->references('id')->on('customer_address');
            $table->foreign('address_shipping_id')->references('id')->on('customer_address');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('shop_id')->references('id')->on('shops')->onDelete('cascade');
            $table->foreign('coupon_id')->references('id')->on('coupons');
        });

        //
        // NOTE -- cart_products
        // --------------------------------------------------

        Schema::table('cart_products', function($table) {
            $table->foreign('cart_id')->references('id')->on('carts')->onDelete('cascade');
            $table->foreign('item_id')->references('id')->on('variants')->onDelete('cascade');
        });

        //
        // NOTE -- tickets
        // --------------------------------------------------

        Schema::table('tickets', function($table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });


        //
        // NOTE -- tickets_comments
        // --------------------------------------------------

        Schema::table('tickets_comments', function($table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('ticket_id')->references('id')->on('tickets')->onDelete('cascade');
        });

        //
        // NOTE -- trends
        // --------------------------------------------------

        Schema::table('trends', function($table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        //
        // NOTE -- trends_preferences
        // --------------------------------------------------

        Schema::table('trends_preferences', function ($table) {
            $table->foreign('shop_id')->references('id')->on('shops')->onDelete('cascade');
            $table->foreign('coupon_id')->references('id')->on('coupons')->onDelete('cascade');
        });

        //
        // NOTE -- cities
        // --------------------------------------------------

        Schema::table('cities', function ($table) {
            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
        });

        //
        // NOTE -- code_ser
        // --------------------------------------------------

        Schema::table('code_ser', function ($table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });


        //
        // NOTE -- config_ser
        // --------------------------------------------------

        Schema::table('config_ser', function ($table) {
            $table->foreign('code_ser_id')->references('id')->on('code_ser')->onDelete('cascade');
        });




    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cities');
        Schema::drop('option_value_variant');
        Schema::drop('option_values');
        Schema::drop('tax_order_item');
        Schema::drop('order_item');
        Schema::drop('options');
        Schema::drop('images');
        Schema::drop('cart_products');
        Schema::drop('variants');
        Schema::drop('sections');
        Schema::drop('coupon_redemption');
        Schema::drop('restrictions');
        Schema::drop('coupon_category');
        Schema::drop('category_product');
        Schema::drop('categories');
        Schema::drop('product_country_tax');
        Schema::drop('products');
        Schema::drop('order_history');
        Schema::drop('orders');
        Schema::drop('order_status');
        Schema::drop('carts');
        Schema::drop('customer_address');
        Schema::drop('address_history');
        Schema::drop('addresses');
        Schema::drop('consults');
        Schema::drop('coupons');
        Schema::drop('social_auths');
        Schema::drop('customers');
        Schema::drop('social_login');
        Schema::drop('stores');
        Schema::drop('category_shop');
        Schema::drop('domains');
        Schema::drop('payments');
        Schema::drop('history_subscription');
        Schema::drop('subscriptions');
        Schema::drop('plans');
        Schema::drop('shipping_country_tax');
        Schema::drop('taxes');
        Schema::drop('shipping_methods');
        Schema::drop('payment_values');
        Schema::drop('payment_methods');
        Schema::drop('locals');
        Schema::drop('trends_preferences');
        Schema::drop('providers');
        Schema::drop('shops');
        Schema::drop('themes');
        Schema::drop('tickets_comments');
        Schema::drop('tickets');
        Schema::drop('trends');
        Schema::drop('config_ser');
        Schema::drop('code_ser');
        Schema::drop('users');
        Schema::drop('states');
        Schema::drop('countries');
        Schema::drop('password_resets');
        Schema::dropIfExists('jobs');
    }
}
