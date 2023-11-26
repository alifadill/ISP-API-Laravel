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
        Schema::table('orders', function (Blueprint $table) {
        // $table->foreignId('user_id')->constrained();
            $table->foreign('status_id')->references('id')->on('statuses');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('paket_id')->references('id')->on('pakets');         
            $table->foreign('teknisi_id')->references('id')->on('teknisis');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
