<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevelopersTable extends Migration
{
    public function up()
    {
        Schema::create('developers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->char('sexo');
            $table->integer('idade');
            $table->string('hobby');
            $table->date('datanascimento');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('developers');
    }
}
