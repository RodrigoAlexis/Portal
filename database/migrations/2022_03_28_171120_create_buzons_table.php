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
            $table->enum('canal', ['Seguimiento', 'Anonimo']);
            $table->enum('categoria', ['Condiciones Laborales', 
                                        'Salud y Seguridad', 
                                        'Normas de Conducta', 
                                        'Violencia Laboral', 
                                        'Hostigamiento Laboral', 
                                        'Discriminación',
                                        'Medio Ambiente',
                                        'Acoso Laboral',
                                        'Abuso de Derechos Humanos',
                                        'Confidencialidad y Privacidad de Datos Personales',
                                        'Soborno/Corrupción',
                                        'Otro',]);
            $table->enum('tipo', ['Denuncia', 'Queja', 'Sugerencia']);

            $table->enum('isClient', ['Soy cliente', 'No soy cliente'])->default('No soy cliente');
            $table->text('hechos');
            $table->string('file') ->nullable();
            $table->string('image_path')->nullable();
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
