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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->integer('id_pesanan')->primary();
            $table->integer('id_menu');
            $table->integer('id_pelanggan');
            $table->integer('jumlah');
            $table->integer('id_user');
            $table->timestamps();
            
            $table->foreign('id_menu')->references('id_menu')->on('menus');
            $table->foreign('id_pelanggan')->references('id_pelanggan')->on('pelanggans');
            $table->foreign('id_user')->references('id_user')->on('user_barus');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
