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
        Schema::create('boitDeMessage', function (Blueprint $table) {
            
            $table->id("idBoitdemessgae");
            $table->unsignedBigInteger("idAdmin");
            $table->string("messageAdmin");
            $table->dateTime("dateMessageAdmin");
            $table->unsignedBigInteger("idUser");
            $table->string("messageUser");
            $table->dateTime("dateMessageUser");
            $table->foreign('idAdmin')->references('idAdmin')->on('admins');
            $table->foreign('idUser')->references('idUser')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boit_demessage');
    }
};
