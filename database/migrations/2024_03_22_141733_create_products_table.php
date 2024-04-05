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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shop_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('price', 8, 2);
            $table->string('image')->nullable();
            $table->foreignId('category_id')->constrained('product_categories');
            $table->enum('status', ['available', 'sold_out', 'pending', 'disabled'])->default('pending');
            $table->integer('quantity')->default(0); // Thêm trường quantity với giá trị mặc định là 0
            $table->string('color')->nullable(); // Thêm trường color có thể là null
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
