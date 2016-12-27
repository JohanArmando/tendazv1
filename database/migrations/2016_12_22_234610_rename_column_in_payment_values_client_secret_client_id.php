<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameColumnInPaymentValuesClientSecretClientId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payment_values', function (Blueprint $table) {
            $table->renameColumn('client_id' , 'api_id');
            $table->renameColumn('client_secret' , 'api_key');
            $table = Schema::getConnection()->getDoctrineSchemaManager()->getDatabasePlatform();
            $table->registerDoctrineTypeMapping('enum', 'string');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payment_values', function (Blueprint $table) {
            $table->renameColumn('api_id' , 'client_id' );
            $table->renameColumn('api_key' , 'client_secret' );
            $table = Schema::getConnection()->getDoctrineSchemaManager()->getDatabasePlatform();
            $table->registerDoctrineTypeMapping('enum', 'string');
        });
    }
}
