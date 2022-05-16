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
            $table->string('paterno')->nullable();
            $table->string('materno')->nullable();
            $table->enum('isClient', ['Soy cliente o proveedor', 'No soy cliente o proveedor'])->default('No soy cliente o proveedor');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->bigInteger('telefono')->nullable();
            $table->string('razon_social')->nullable();
            $table->string('id_socialite')->nullable();
            $table->string('type_socialite')->nullable()->default('N/A');
            $table->enum('departamento', ['Sistemas', 'Ventas', 'Calidad'])->nullable();
            $table->enum('isAdmin', ['Si', 'No'])->default('No');

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
