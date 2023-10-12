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
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('id_brands');
            $table->unsignedBigInteger('id_categories');
            $table->unsignedBigInteger('id_genders');
            $table->integer('codigo');
            $table->string('nombre');
            $table->string('descripcion');
            $table->integer('cantidad');
            $table->float('precio_neto');
            $table->string('imagen');
            $table->binary('estatus');
            $table->foreign('id_categories')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_brands')->references('id')->on('brands')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_genders')->references('id')->on('genders')->onUpdate('cascade')->onDelete('cascade');
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
