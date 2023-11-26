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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('subdistrict');
            $table->string('city');
            $table->unsignedBigInteger('status_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('paket_id');
            $table->unsignedBigInteger('teknisi_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
