<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuzonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buzons', function (Blueprint $table) {
            $table->id();
            $table->string('folio')->unique();
            $table->enum('canal', ['Seguimiento', 'Anónimo']);
            $table->enum('categoria', ['Normas de Conducta', 
                                        'Condiciones Laborales', 
                                        'Discriminación / Acoso', 
                                        'Prácticas Monopólicas', 
                                        'Leyes Ambientales', 
                                        'Sobornos',
                                        'Derechos de la Tierra',
                                        'Otros']);
            $table->enum('tipo', ['Denuncia', 'Queja', 'Sugerencia']);

            $table->enum('isClient', ['Soy cliente o proveedor', 'No soy cliente o proveedor'])->default('No soy cliente o proveedor');
            $table->text('hechos');
            $table->bigInteger('telefono')->nullable();
            $table->string('razon_social')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
 
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('buzons');
    }
}
