<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSportVenuesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sport_venues', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('sport_id')->constrained('xref_sports');
            $table->foreignId('venue_id')->constrained('venues');
            $table->datetime('time_from');
            $table->datetime('time_to');
            $table->foreignId('created_by')->constrained('users');
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
        Schema::drop('sport_venues');
    }
}
