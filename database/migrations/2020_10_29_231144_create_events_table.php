<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('longitude');
            $table->string('latitude');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('soldier_id')->nullable();
            $table->unsignedBigInteger('conflict_id')->nullable();
            $table->unsignedBigInteger('battle_id')->nullable();
            $table->unsignedBigInteger('action_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
