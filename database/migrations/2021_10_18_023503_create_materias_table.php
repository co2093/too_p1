<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('escuela_id')->constrained();
            $table->foreignId('prerrequisito_id')->nullable()->constrained('materias');
            $table->char('codigo_materia', 6)->unique();
            $table->string('nombre');
            $table->integer('unidades_valorativas');
            $table->integer('num_ciclo');
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
        Schema::dropIfExists('materias');
    }
}
