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
        Schema::create('service_passengers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Passenger_id');
            $table->unsignedBigInteger('service_provider_id');
            $table->foreign('Passenger_id')->references('id')->on('passengers');
            $table->foreign('service_provider_id')->references('id')->on('service_providers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_passengers');
    }
};
