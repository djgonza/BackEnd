<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entry', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->float('amount'); //Define la cantidad a pagar
            $table->boolean('type'); //Define si es ingeso o gasto
            $table->dateTime('execute_time'); //Define el dia que se hara efectivo
            $table->integer('concept'); //Clave foranea de la tabla conceptos
            $table->integer('user_id'); //Clave foranea de la tabla users
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('entry', function (Blueprint $table) {
            //
        });
    }
}
