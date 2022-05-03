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
        Schema::create('orderables', function (Blueprint $table) {
            $table->bigInteger('order_id')->unsigned();
            $table->integer('quantity')->unsigned()->nullable(); # Permite saber cuántos Products o Payouts pertenecen a una Order
            
            // Necesitaríamos o un payout_id o un product_id, por lo tanto se incluye un morphs():
            $table->morphs('orderable');

            $table->foreign('order_id')->references('id')->on('orders'); # La FK 'order_id' hace referencia al id de orders
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_payout');
    }
};
