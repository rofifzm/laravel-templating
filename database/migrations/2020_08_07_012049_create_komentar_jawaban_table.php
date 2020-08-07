<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomentarJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentar_jawaban', function (Blueprint $table) {
            $table->id();
            $table->string('isi',255);
            $table->date('tangga;_dibuat');
            $table->integer('jawaban_id')
            ->foreign('jawaban_id')
            ->references('id')
            ->on('jawaban');
            $table->integer('profil_id')
            ->foreign('profil_id')
            ->references('id')
            ->on('profil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('komentar_jawaban');
    }
}
