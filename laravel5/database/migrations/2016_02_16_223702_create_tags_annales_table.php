<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsAnnalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags_annales', function (Blueprint $table) {
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
        Schema::table('tags_annales', function(Blueprint $table) {
            $table->dropForeign('tags_annales_tag_id_foreign');
            $table->dropForeign('tags_annales_annale_id_foreign');
        });
        Schema::drop('tags_annales');
    }
}
