<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikeDislikeJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like_dislike_jawaban', function (Blueprint $table) {
           $table->integer('jawaban_id')
           ->foreign('jawaban_id')
           ->references('id')
           ->on('pertanyaan');
           $table->integer('profil_id')
           ->foreign('profil_id')
           ->references('id')
           ->on('profil');
           $table->integer('poin');
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('like_dislike_jawaban');
    }
}
