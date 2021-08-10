<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alumno_id')->unsigned();
            $table->foreign('alumno_id')->references('id')->on('alumnos');
             $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->integer('grado_id')->unsigned();
            $table->foreign('grado_id')->references('id')->on('grados');
            $table->integer('materia_id')->unsigned();
            $table->foreign('materia_id')->references('id')->on('materias');
            $table->integer('docente_id')->unsigned();
            $table->foreign('docente_id')->references('id')->on('docentes');
            $table->string('Lunes');
            $table->string('Martes');
            $table->string('Miercoles');
            $table->string('Jueves');
            $table->string('Viernes');        
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
        Schema::dropIfExists('horarios');
    }
}
