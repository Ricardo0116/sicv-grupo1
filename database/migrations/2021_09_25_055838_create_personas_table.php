<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id('idpersonas');
            $table->string('nombres', 45);
            $table->string('apellidos', 45);
            $table->string('genero', 45);
            $table->string('barrio', 45);

            $table->bigInteger('idroles')->unsigned();
            $table->foreign('idroles')->references('id_rol')->on('roles');

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
        Schema::dropIfExists('personas');
    }
}
