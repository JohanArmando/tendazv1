<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveUniqueColumnsEmailInCustomersAndProviders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('providers' , function (Blueprint $table){
            $table->dropUnique('providers_email_unique');
        });
        
        Schema::table('customers' , function (Blueprint $table){
            $table->dropUnique('customers_email_unique');
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
            $table->unique('email');
        });

        Schema::table('customers' , function (Blueprint $table){
            $table->unique('email');
        });
    }
}
