<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description', 1000);
            $table->float('price')->unsigned(); # El precio no debe tener signo
            $table->integer('stock')->unsigned(); # La existencia no debe tener signo
            $table->string('status')->default('unavailable'); # Por defecto, al inicio un producto está 'No disponible'
            $table->date('published_at');
            $table->float('handling_percentage')->unsigned();
            $table->timestamps(); # Crea dos atributos (con fecha y hora) sobre el momento de creación y de actualización
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
