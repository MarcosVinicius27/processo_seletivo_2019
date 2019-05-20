<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('usuarios', function(Blueprint $table){
            $table->increments('id');
            $table->string('name', 30);
            $table->string('email', 60);
            $table->string('senha', 10);
            $table->date('dataNascimento',10);
            $table->timestamps();
            $table->softDeletes();
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clientes');
    }
}
