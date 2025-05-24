<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('orders_008', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('kurir_id')->nullable()->constrained('kurirs_008')->onDelete('set null');
            $table->dateTime('order_date');
            $table->decimal('total_price', 10, 2);
            $table->text('shipping_address')->nullable();
            $table->enum('status', ['pending', 'processed', 'shipped', 'completed', 'cancelled'])->default('pending');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('orders_008');
    }
};
