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
        $this->call(CategoryTldSeeder::class);
        $this->call(TldSeeder::class);
        $this->call(FeaturesTableSeeder::class);
        Model::unguard();
        
        Model::reguard();
    }
}
