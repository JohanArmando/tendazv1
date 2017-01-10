<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tlds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name' , 60);
            $table->double('price' , 5 , 2);
            $table->string('uuid')->index();
            $table->integer('category_tld_id')->unsigned();
            $table->foreign('category_tld_id')->references('id')->on('category_tlds');
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
        Schema::dropIfExists('tlds');
    }
}
