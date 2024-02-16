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
            $table->id("idProduct");
            $table->string("nom");
            $table->string("desination1");
            $table->string("desination2");
            $table->string("desination3");
            $table->string("desination4");
            $table->string("desination5");
            $table->string("desination6");
            $table->integer("prix");
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
