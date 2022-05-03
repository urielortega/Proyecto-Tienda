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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->date('registered_at')->default(now());
            $table->timestamp('buyer_since')->default(now());
            $table->timestamp('seller_since')->nullable();
            // $table->timestamp('seller_since')->default(now());
            $table->timestamp('supervisor_since')->nullable();
            // $table->timestamp('supervisor_since')->default(now());
            $table->timestamp('manager_since')->nullable();
            // $table->timestamp('manager_since')->default(now());
            $table->timestamp('accountant_since')->nullable();
            // $table->timestamp('accountant_since')->default(now());
            //$table->string('role')->default('buyer'); # Por defecto, al crear un usuario, se tendrá el rol de 'Cliente comprador'
            $table->rememberToken();
            $table->timestamps(); # Crea dos atributos (con fecha y hora) sobre el momento de creación y de actualización
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
  

};