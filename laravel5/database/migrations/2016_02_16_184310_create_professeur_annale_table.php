<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfesseurAnnaleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professeur_annale', function (Blueprint $table) {
            $table->integer('professeur_id')->unsigned();
            $table->integer('annale_id')->unsigned();
            $table->timestamps();

            $table->foreign('professeur_id')
                ->references('id')->on('professeurs')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('annale_id')
                ->references('id')->on('annales')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('professeur_annale', function(Blueprint $table) {
            $table->dropForeign('professeur_annale_professeur_id_foreign');
            $table->dropForeign('professeur_annale_annale_id_foreign');
        });
        Schema::drop('professeur_annale');
    }
}
