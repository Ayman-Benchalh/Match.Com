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
        Schema::table('commands', function (Blueprint $table) {
            $table->unsignedBigInteger("idAdmin");
            $table->unsignedBigInteger("idUser");
            $table->unsignedBigInteger("idProduct");
            $table->foreign('idAdmin')->references('idAdmin')->on('admins');
            $table->foreign('idUser')->references('idUser')->on('users');
            $table->foreign('idProduct')->references('idProduct')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('commands', function (Blueprint $table) {
            //
        });
    }
};
