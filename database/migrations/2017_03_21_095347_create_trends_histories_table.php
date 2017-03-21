<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrendsHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('trends_histories', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('hits')->default('0');
          $table->integer('trend_id');
          $table->integer('customer_id')->nullable();
          $table->string('trend_type');
          $table->timestamp('start_at')->nullable();
          $table->timestamp('end_at')->nullable();
          $table->timestamps();
      });
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
