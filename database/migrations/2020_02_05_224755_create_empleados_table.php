<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // Schema::create('areas', function (Blueprint $table) {
        //     $table->engine = 'InnoDB';
        //     $table->bigIncrements('id');
        //     $table->string('nombre');
        //     $table->string('puesto');
        //     $table->timestamps();
        // });

        //  Schema::create('domicilios', function (Blueprint $table) {
        //     $table->engine = 'InnoDB';
        //     $table->bigIncrements('id');
        //     $table->string('localidad');
        //     $table->string('municipio');
        //     $table->string('calle');
        //     $table->string('colonia');
        //     $table->string('noext');
        //     $table->string('noint');
        //     $table->timestamps();
        // });

        //  Schema::create('contactos', function (Blueprint $table) {
        //     $table->engine = 'InnoDB';
        //     $table->bigIncrements('id');
        //     $table->string('correo');
        //     $table->string('nocelular');
        //     $table->string('nocasa');
        //     $table->timestamps();
        // });

        Schema::create('empleados', function (Blueprint $table) {
            //$table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('noempleado');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('ine');
            $table->string('curp');
            $table->string('areaadscr');
            $table->string('cargo');
            $table->string('rfc');
            $table->string('calle');
            $table->string('colonia');
            $table->string('cp');
            $table->string('municipio');
            $table->string('noext')->nullable();
            $table->string('noint')->nullable();
            $table->string('correo')->nullable();
            $table->string('nocasa')->nullable();
            $table->string('nocelular')->nullable();
            // $table->unsignedBigInteger('area_id'); // Relación con area
            // $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');
            // $table->unsignedBigInteger('domicilio_id'); // Relación con domicilio
            // $table->foreign('domicilio_id')->references('id')->on('domicilios')->onDelete('cascade');
            // $table->unsignedBigInteger('contacto_id'); // Relación con contacto
            // $table->foreign('contacto_id')->references('id')->on('contactos')->onDelete('cascade');

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
        Schema::dropIfExists('empleados');
    }
}
