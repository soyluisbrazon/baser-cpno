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
        Schema::create('income_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_products');
            $table->unsignedBigInteger('id_users');
            $table->integer('cantidad');
            $table->float('costo');
            $table->timestamp('fecha');
            $table->foreign('id_products')->references('id')->on('products')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_users')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('income_histories');
    }
};
