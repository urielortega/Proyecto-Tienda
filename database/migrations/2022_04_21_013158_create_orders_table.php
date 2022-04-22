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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('status')->default('unpaid'); # Por defecto, una orden estará marcada como 'No pagada'
            $table->string('payment_type');
            $table->string('payment_proof');
            $table->integer('rating')->unsigned(); # La calificación no debe tener signo
            $table->date('placed_at'); # Fecha en la que se realizó la orden
            $table->float('total_amount')->unsigned(); # El importe no debe tener signo
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
        Schema::dropIfExists('orders');
    }
};
