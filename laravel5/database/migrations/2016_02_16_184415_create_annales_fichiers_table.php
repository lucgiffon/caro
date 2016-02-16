<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnalesFichiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annales_fichiers', function (Blueprint $table) {
            $table->integer('annale_id')->unsigned();
            $table->integer('fichier_id')->unsigned();
            $table->timestamps();

            $table->foreign('annale_id')
                  ->references('id')->on('annales')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->foreign('fichier_id')
                  ->references('id')->on('fichiers')
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
        Schema::table('annales_fichiers', function(Blueprint $table) {
            $table->dropForeign('annales_fichiers_annale_id_foreign');
            $table->dropForeign('annales_fichiers_fichier_id_foreign');
        });
        Schema::drop('annales_fichiers');
    }
}
