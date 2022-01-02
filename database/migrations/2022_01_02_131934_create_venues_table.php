<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVenuesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venues', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->text('address');
            $table->foreignId('district_id')->constrained('xref_districts');
            $table->foreignId('state_id')->constrained('xref_states');
            $table->string('lat');
            $table->string('lng');
            $table->foreignId('owner_id')->constrained('users');
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
        Schema::drop('venues');
    }
}
