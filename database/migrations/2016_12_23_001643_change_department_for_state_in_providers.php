<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeDepartmentForStateInProviders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('providers' , function (Blueprint $table){
            $table->renameColumn('department_id' ,'state_id');
            $table->integer('city_id')->unsigned()->nullable();
            $table->foreign('city_id')->references('id')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('providers' , function (Blueprint $table){
            $table->renameColumn('state_id' , 'department_id');
            $table->dropForeign('providers_city_id_foreign');
            $table->dropColumn('city_id');
        });
    }
}
