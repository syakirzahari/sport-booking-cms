<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBookings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('booking_no')->nullable();
            $table->foreignId('slot_id')->constrained('venue_slots');
            $table->foreignId('venue_id')->constrained('venues');
            $table->integer('is_deposit')->default(0);
            $table->integer('is_full')->default(0);
            $table->integer('is_refund')->default(0);
            $table->string('payment_status')->nullable();
            $table->integer('total_amount')->nullable();
            $table->foreignId('booked_by')->constrained('users');
            $table->foreignId('collected_by')->nullable()->constrained('users');
            $table->softDeletes();
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
        Schema::dropIfExists('bookings');
    }
}
