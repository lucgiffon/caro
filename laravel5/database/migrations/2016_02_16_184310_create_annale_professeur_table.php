<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnaleProfesseurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annale_professeur', function (Blueprint $table) {
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
        Schema::table('annale_professeur', function(Blueprint $table) {
            $table->dropForeign('annale_professeur_professeur_id_foreign');
            $table->dropForeign('annale_professeur_annale_id_foreign');
        });
        Schema::drop('annale_professeur');
    }
}
