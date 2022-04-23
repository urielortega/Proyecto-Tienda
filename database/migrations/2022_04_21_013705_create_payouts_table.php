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
        Schema::create('payouts', function (Blueprint $table) {
            $table->id();
            $table->string('status')->default('undelivered'); # Por defecto, un pago estará marcado como 'No entregado'
            $table->float('amount')->unsigned(); # El importe no debe tener signo
            $table->date('delivered_at')->nullable(); # Fecha en la que se entregó el pago
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
        Schema::dropIfExists('payouts');
    }
};
