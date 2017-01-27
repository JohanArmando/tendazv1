<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumsToTablePlans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('plans' , function (Blueprint $table){
            $table->decimal('price', 15 , 2)->nullable()->change();
            $table->renameColumn('activate' , 'active');
            $table->boolean('visible')->default(true);
            $table->integer('downgrade');
            $table->integer('upgrade');
            $table->enum('interval', ['daily' , 'monthly' , 'yearly' , 'weekly'])->nullable();
            $table->integer('interval_count')->nullable();
            $table->decimal('discount' , 3 , 2)->nullable();
            $table->unsignedInteger('plan_id')->nullable();

            $table->foreign('plan_id')->references('id')->on('plans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('plans' , function (Blueprint $table){
            $table->renameColumn('active' , 'activate');
            $table->dropColumn('visible');
            $table->dropColumn('downgrade');
            $table->dropColumn('upgrade');
            $table->dropColumn('interval');
            $table->dropColumn('interval_count');
        });
    }
}
