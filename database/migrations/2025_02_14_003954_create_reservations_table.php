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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id('reservationID');
            $table->foreignId('user_ID');
            $table->foreignId('room_ID');
            $table->date('check-in');
            $table->date('check-out');
            $table->enum('availabilityDate',['available','occupied'])->default('available');
            $table->enum('reservationStatus',['check-in', 'check-out','book'])->default('book');

            $table->foreign('user_ID')->references('userID')->on('user_a_g')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('room_ID')->references('roomID')->on('rooms')->onDelete('cascade')->onUpdate('cascade');

            
            
            
            
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
