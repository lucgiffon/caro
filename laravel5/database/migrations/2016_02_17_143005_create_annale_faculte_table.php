<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnaleFaculteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annale_faculte', function (Blueprint $table) {
            $table->integer('annale_id')->unsigned();
            $table->integer('faculte_id')->unsigned();
            $table->timestamps();

            $table->foreign('annale_id')
                ->references('id')->on('annales')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('faculte_id')
                ->references('id')->on('facultes')
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
        Schema::table('annale_faculte', function(Blueprint $table) {
            $table->dropForeign('annale_faculte_annale_id_foreign');
            $table->dropForeign('annale_faculte_faculte_id_foreign');
        });
        Schema::drop('annale_faculte');
    }
}
