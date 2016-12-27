<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameColumnBusinnesSizeTableStores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stores', function (Blueprint $table) {
            $table->renameColumn('business_size','conditions');
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
            $table->renameColumn('conditions' , 'business_size');
            $table = Schema::getConnection()->getDoctrineSchemaManager()->getDatabasePlatform();
            $table->registerDoctrineTypeMapping('enum', 'string');
        });
    }
}
