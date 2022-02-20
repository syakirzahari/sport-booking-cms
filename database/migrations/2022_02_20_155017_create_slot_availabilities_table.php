<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlotAvailabilitiesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slot_availabilities', function (Blueprint $table) {
            $table->id('id');
            $table->date('date');
            $table->datetime('time_from');
            $table->datetime('time_to');
            $table->foreignId('venue_slot_id')->constrained('venue_slots');
            $table->string('rate');
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
        Schema::drop('slot__availabilities');
    }
}
