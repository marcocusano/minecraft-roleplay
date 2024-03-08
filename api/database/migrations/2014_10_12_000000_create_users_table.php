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

        Schema::create('users', function (Blueprint $table) {
            // Keys
            $table->id();
            $table->string('uuid')->unique()->nullable();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('nickname')->unique();
            $table->string('email')->unique()->nullable();
            $table->string('phone')->unique()->nullable();
            $table->string('discord')->unique()->nullable();
            $table->string('telegram')->unique()->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('gender', 1)->nullable();
            $table->text('curriculum')->nullable(); // Markdown text
            $table->integer('thirst')->default(100);
            $table->double('balance')->default(1000);
            $table->timestamps(); // created_at = Birthday - updated_at = Last profile update or last login
            // Foreigns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
