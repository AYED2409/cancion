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
        Schema::create('cancion', function (Blueprint $table) {
            $table->id(); //primary key id autonumerico
            //titulo
            $table->string('titulo',80)->unique();
            //interprete
            $table->string('interprete',100);
            //autor
            $table->string('autor',100)->nullable();
            //duracion
            $table->time('duracion')->nullable();
            //genero
            $table->string('genero',20);
            //album
            $table->string('album',70)->nullable();
            //orden de la cancion
            $table->smallInteger('orden')->nullable();
            //fecha publicacion
            $table->date('fechapublicacion');
            $table->timestamps(); //crea 2 campos con marcas de tiempo, creacion y edicion
            
            $table->unique(['album','orden']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cancion');
    }
};
