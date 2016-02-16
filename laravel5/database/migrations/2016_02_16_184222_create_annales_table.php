<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_matiere');
            $table->integer('id_faculte');
            $table->integer('id_niveau');
            $table->integer('id_cursus');
            $table->date('annee');
            $table->string('path');
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
        Schema::drop('annales');
    }
}
