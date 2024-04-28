<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('passenger__flight__bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Passenger_id');
            $table->unsignedBigInteger('Flight_id');
            $table->unsignedBigInteger('Booking_id');
            $table->foreign('Passenger_id')->references('id')->on('passengers');
            $table->foreign('Flight_id')->references('id')->on('flights');
            $table->foreign('Booking_id')->references('id')->on('bookings');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('passenger__flight__bookings');
    }
};
