<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('kurirs_008', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // HARUS dideklarasikan sebelum foreign
            $table->string('vehicle_type')->nullable();
            $table->string('vehicle_plate')->nullable();
            $table->enum('status', ['available', 'on_delivery', 'inactive'])->default('available');
            $table->string('phone_number');
            $table->timestamps();

            // Foreign key setelah kolom didefinisikan
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::dropIfExists('kurirs_008');
    }
};
