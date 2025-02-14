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
        Schema::create('payments', function (Blueprint $table) {
            $table->id('paymentID');
            $table->foreignId('reservation_ID');
            $table->integer('totalAmount');
            $table->integer('paymentDeposit');
            $table->integer('paymentAmount');
            $table->enum('paymentStatus',['pending','paid'])->default('pending');
            $table->string('paymentmethod');
            $table->string('paymentReference');
            $table->string('image');
            $table->date('paymentDate');

            $table->foreign('reservation_ID')->references('reservationID')->on('reservations')->onDelete('cascade')->onUpdate('cascade');
            
        
            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
