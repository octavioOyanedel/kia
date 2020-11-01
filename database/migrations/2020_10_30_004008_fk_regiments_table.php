<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FkRegimentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('regiments', function (Blueprint $table) {
            $table->foreign('battalion_id')->references('id')->on('battalions')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('division_id')->references('id')->on('divisions')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('regiments', function (Blueprint $table) {
            //
        });
    }
}
