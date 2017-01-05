<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateCaracteresConditionsStores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stores', function (Blueprint $table) {
            $table->text('conditions')->change();
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
        Schema::table('stores', function (Blueprint $table) {
            $table->string('conditions')->change();
            $table = Schema::getConnection()->getDoctrineSchemaManager()->getDatabasePlatform();
            $table->registerDoctrineTypeMapping('enum', 'string');
        });
    }
}
