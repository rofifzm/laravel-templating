<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanyaan', function (Blueprint $table) {
            $table->id();
            $table->string('judul',45);
            $table->string('isi',255);
            $table->date('tanggal_dibuat');
            $table->date('tanggal_diperbarui');
            $table->integer('jawaban_tepat');
            $table->integer('profil_id')
            ->foreign('profil_id')
            ->references('id')
            ->on('profil');
            $table->integer('jawaban_tepat_id')
            ->foreign('jawaban_tepat_id')
            ->references('id')
            ->on('jawaban');
            
        


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pertanyaan');
    }
}
