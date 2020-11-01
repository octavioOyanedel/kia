<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FkEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->foreign('soldier_id')->references('id')->on('soldiers')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('conflict_id')->references('id')->on('conflicts')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('battle_id')->references('id')->on('battles')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('action_id')->references('id')->on('actions')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('events', function (Blueprint $table) {
            //
        });
    }
}
