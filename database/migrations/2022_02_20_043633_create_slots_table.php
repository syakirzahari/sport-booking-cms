<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlotTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venue_slots', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('sport_id')->constrained('xref_sports');
            $table->foreignId('venue_id')->constrained('venues');
            $table->string('court_name');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('venue_slots');
    }
}
