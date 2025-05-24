<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('products_008', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2);
            $table->integer('stock');
            $table->unsignedBigInteger('category_id')->nullable(); // jika belum ada tabel categories, abaikan relasinya
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('products_008');
    }
};
