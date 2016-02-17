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
            $table->integer('matiere_id');
            $table->integer('niveau_id');
            $table->integer('cursus_id');
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
