<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(\Tendaz\Models\User::class, function (Faker\Generator $faker) {
    static $password;
    return [
        'name' => $faker->firstName,
        'uuid' => $faker->uuid,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'type' => 'admin',
        'phone' => $faker->phoneNumber,
        'active' => 1,
        'identification' => '11111',
        'notes' => $faker->text,
        'image' => $faker->imageUrl,
        'country_id' => rand(1 , 255),
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(\Tendaz\Models\Store\Shop::class, function (Faker\Generator $faker) {
    return [
        'uuid'	=> $faker->uuid,
        'name'	=> $faker->name,
        'logo'	=> $faker->imageUrl,
        'active'=>rand(0 , 1),
        'theme_id' => rand(1 , 5),
        'country_base_operation_id' => rand(1 , 250)
    ];
});
$factory->define(\Tendaz\Models\Domain\Domain::class, function (Faker\Generator $faker) {
    return [
        'uuid' => $faker->uuid ,
        'name' => 'subdomain' ,
        'domain' => 'http://subdomain.tendaz.app:8000',
        'ssl' => 'https://subdomain.tendaz.app:8000',
        'main' => '0',
        'active' => '1',
        'state' => 'OK',
    ];
});
$factory->define(\Tendaz\Models\Subscription\Subscription::class, function (Faker\Generator $faker) {
    return [
        'uuid' => $faker->uuid ,
        'amount' => 10 , 
        'state' => 'active' , 
        'start_at'=> null , 
        'end_at' => null ,
        'trial_at' => \Carbon\Carbon::today()->addDays(15),
        'plan_id' => 2
    ];
});
$factory->define(\Tendaz\Models\Store\Store::class, function (Faker\Generator $faker) {
    return [
        'uuid'	=> $faker->uuid,
        'phone_type'	=> 'mobile',
        'number_phone'	=> $faker->phoneNumber,
        'code_country'=> '+57',
        'business_size' => rand(1 , 5),
        'number_local' => rand(1 , 10),
        'address_1' => $faker->address,
        'address_2' => $faker->address,
        'lat' => $faker->latitude,
        'lon' => $faker->longitude,
        'blog' => $faker->email,
        'pinterest' => $faker->email,
        'instagram' => $faker->email,
        'google_plus' => $faker->email,
        'twitter' => $faker->email,
        'facebook' => $faker->email,
        'enabled' => 0,
        'category_shop_id' => rand(1 , 25),
    ];
});
$factory->define(\Tendaz\Models\Products\Product::class, function (Faker\Generator $faker) {
    return [
        'uuid'	=> $faker->uuid,
        'name'	=> $faker->name,
        'slug'	=> $faker->slug,
        'seo_title'=> $faker->word,
        'seo_description' => $faker->sentence,
        'description' => $faker->text,
        'publish' => 1,
    ];
});
