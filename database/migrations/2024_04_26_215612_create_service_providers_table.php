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
        Schema::create('service_providers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('User_id');
            $table->unsignedBigInteger('Company_id');   // owner
            $table->unsignedBigInteger('Airport_id');
            $table->foreign('User_id')->references('id')->on('Users');
            $table->foreign('Company_id')->references('id')->on('Users');
            $table->foreign('Airport_id')->references('id')->on('airports');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_providers');
    }
};
