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
            $table->engine = 'InnoDB';
            $table->increments('id_productos'); 
            $table->unsignedInteger('id_categorias');
            $table->integer('codigo')->unique();
            $table->string('descripcion', 50);
            $table->integer('stock');
            $table->decimal('precio', 8, 2); 
            $table->date('fecha');
            $table->timestamps();
        
            $table->foreign('id_categorias')->references('id')->on('categories')->onDelete('cascade');

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
