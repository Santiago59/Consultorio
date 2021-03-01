<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->integer('id_paciente',5);
            $table->integer('id_doctor',5);
            $table->date('fecha_agenda');
            $table->time('hora_inicio');
            $table->time('hora_final');
            $table->string('motivo',120);
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
        Schema::dropIfExists('agendas');
    }
}
