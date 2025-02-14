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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id('roomID');
            $table->foreignId('user_ID');
            $table->string('roomType');
            $table->integer('roomNumber')->unique();
            $table->string('description');
            $table->integer('price');
            $table->string('image')->nullable();

            $table->foreign('user_ID')->references('userID')->on('user_a_g')->onDelete('cascade')->onUpdate('cascade');
            
            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
