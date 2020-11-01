<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FkSoldiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('soldiers', function (Blueprint $table) {
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('soldiers', function (Blueprint $table) {
            $table->foreign('grade_id')->references('id')->on('grades')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('regiment_id')->references('id')->on('regiments')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('battalion_id')->references('id')->on('battalions')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('division_id')->references('id')->on('divisions')->onUpdate('cascade')->onDelete('set null');
        });
    }
}
