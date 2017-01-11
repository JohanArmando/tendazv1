<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveColumnUuidInCustomerAddress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customer_address' , function (Blueprint $table){
            $table->dropIndex('customer_address_uuid_index');
            $table->dropColumn('uuid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customer_address' , function (Blueprint $table){
            $table->string('uuid')->index();
        });
    }
}
