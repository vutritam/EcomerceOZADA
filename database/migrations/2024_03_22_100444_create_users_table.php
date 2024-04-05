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
            $table->id(); // Primary key auto-increment
            $table->string('country_region')->nullable();
            $table->enum('trade_role', ['buyer', 'seller', 'both'])->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('company_name')->nullable();
            $table->string('full_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->enum('role', ['admin', 'user']);
            $table->rememberToken();
            $table->timestamps(); // Thêm created_at và updated_at timestamp
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
