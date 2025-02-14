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
        Schema::create('user_a_g', function (Blueprint $table) {
            $table->id('userID');
            $table->string('fullname');
            $table->integer('contactNumber')->unique();
            $table->string('email')->unique();
            $table->date('dateofbirth');
            $table->enum('userRole',['admin', 'guest'])->default('guest');
            $table->string('username');
            $table->string('password');

        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_a_g');
    }
};
