<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $this->call(CountryTableSeeder::class);
        $this->call(StateTableSeeder::class);
        $this->call(citiesTableSeeder::class);
        $this->call(ThemeTableSeeder::class);
        $this->call(CategoryShopTableSeeder::class);
        $this->call(PlanTableSeeder::class);
        $this->call(OptionTableSeeder::class);
        $this->call(OPtionValueTableSeeder::class);
        $this->call(OrderStatusSeed::class);
        $this->call(PaymentMethodsSeeder::class);
        Model::unguard();
        /*factory(\App\Models\User::class , 10)->create()->each(function ($users) use ($faker){
            $shop = $users->shop()->save(factory(\App\Models\Store\Shop::class)->make());
            $shop->plan()->attach(2 , ['uuid' => $faker->uuid ,'amount' => 10 , 'state' => 'active' , 'start_at'=> null , 'end_at' => null ,'trial_at' => \Carbon\Carbon::today()->addDays(15)]);
            $shop->domains()->save(factory(\App\Models\Domain\Domain::class)->make());
            $shop->products()->saveMany(factory(\App\Models\Products\Product::class)->make());
        });*/
        Model::reguard();
    }
}
