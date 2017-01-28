<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnCouponIdIfNotExists extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('carts', 'coupon_id')){
            Schema::table('carts' , function (Blueprint $table){
                $table->integer('coupon_id')->unsigned()->nullable();
                $table->enum('status' , ['open' , 'closed'])->default('open');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
