<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikeDislikePertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like_dislike_pertanyaan', function (Blueprint $table) {
            
            $table->integer('pertanyaan_id')
            ->foreign('pertanyaan_id')
            ->references('id')
            ->on('pertanyaan');
            $table->integer('profil_id')
            ->foreign('profil_id')
            ->references('id')
            ->on('profil');
            $table->integer('poin',11);
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('like_dislike_pertanyaan');
    }
}
