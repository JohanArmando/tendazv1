<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColumnIntByBigintInCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('coupon_category', function (Blueprint $table) {
            $table->dropForeign('coupon_category_category_id_foreign');
        });

        Schema::table('category_product', function (Blueprint $table) {
            $table->dropForeign('category_product_category_id_foreign');
        });
        Schema::table('categories', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned()->change();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {


        Schema::table('categories', function (Blueprint $table) {
            $table->increments('id')->unsigned()->change();
        });

        Schema::table('coupon_category', function (Blueprint $table) {
            $table->unsignedInteger('category_id')->nullable()->change();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });

        Schema::table('category_product', function (Blueprint $table) {
            $table->unsignedInteger('category_id')->nullable()->change();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });

    }
}
