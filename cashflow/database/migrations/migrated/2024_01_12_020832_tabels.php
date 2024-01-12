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
        // Tabel untuk menyimpan informasi dompet (wallets)
        Schema::create('wallets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->float('balance');  // Menyempurnakan penulisan kolom balance
            $table->timestamps();
        });

        // Tabel untuk menyimpan informasi transaksi (transactions)
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('wallet_id');
            $table->float('amount');
            $table->string('description');
            $table->timestamps();
            
            // Menambahkan foreign key constraints
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('wallet_id')->references('id')->on('wallets')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Menghapus foreign key constraints
        Schema::table('transactions', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['wallet_id']);
        });

        // Menghapus tabel transaksi (transactions) terlebih dahulu untuk menghindari konflik foreign key
        Schema::dropIfExists('transactions');

        // Menghapus tabel dompet (wallets)
        Schema::dropIfExists('wallets');
    }
};
