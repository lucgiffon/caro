<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnaleTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annale_tag', function (Blueprint $table) {
            $table->integer('tag_id')->unsigned();
            $table->integer('annale_id')->unsigned();
            $table->timestamps();

            $table->foreign('annale_id')
                ->references('id')->on('annales')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('tag_id')
                ->references('id')->on('tags')
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
        Schema::table('annale_tag', function(Blueprint $table) {
            $table->dropForeign('annale_tag_tag_id_foreign');
            $table->dropForeign('annale_tag_annale_id_foreign');
        });
        Schema::drop('annale_tag');
    }
}
