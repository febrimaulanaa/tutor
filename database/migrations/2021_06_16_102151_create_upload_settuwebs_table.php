<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUploadSettuwebsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upload_settuwebs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rekap');
            $table->string('kompetensi');
            $table->string('rat');
            $table->string('sat');
            $table->string('kisitugastutorial');
            $table->string('materi');
            $table->string('materi2');
            $table->string('materi3');
            $table->string('materi4');
            $table->string('materi5');
            $table->string('materi6');
            $table->string('materi7');
            $table->string('materi8');
            $table->string('catatan');
            $table->string('kisi');
            $table->string('kisi2');
            $table->string('kisi3');
            $table->string('pedoman');
            $table->string('pedoman2');
            $table->string('pedoman3');
            $table->string('tandaterima');
            $table->string('tandaterima2');
            $table->string('tandaterima3');
            $table->string('nilaitertinggi');
            $table->string('nilaiterendah');
            $table->string('sspertemuan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('upload_settuwebs');
    }
}
