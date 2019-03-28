<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->date('event_date');
            $table->string('event_place');
            $table->enum('event_situation', [
              'Usar bicicleta para llegar a un destino ',
              'Usar transporte público para llegar a un destino',
              'Dar la silla a alguien que lo necesita',
              'Rescatar un animal en peligro',
              'Ayudar a una persona de la tercera edad',
              'Pasarse un semáforo en rojo',
              'Estacionarse en un lugar prohibido',
              'Colarse en una fila',
              'Hacer copia en un examen',
              'Saber separar los residuos sólidos en las canecas de basura correcta',
              'Arrojar basura en espacios públicos'
            ]);
            $table->string('event_description');
            $table->integer('id_citizen_creator')->unsigned();
            $table->foreign('id_citizen_creator')->references('id')->on('users');
            $table->integer('id_citizen_receive')->unsigned();
            $table->foreign('id_citizen_receive')->references('id')->on('users');
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
        Schema::dropIfExists('events');
    }
}
