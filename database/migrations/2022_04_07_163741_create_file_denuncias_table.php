<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileDenunciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_denuncias', function (Blueprint $table) {
            $table->id();
            $table->string('file') ->nullable();
            $table->string('image_path')->nullable();

            $table->unsignedBigInteger('denuncia_id')->nullable();

            $table->foreign('denuncia_id')->references('id')->on('buzons')->onDelete('cascade');

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
        Schema::dropIfExists('file_denuncias');
    }
}
