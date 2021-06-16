<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNamaToUploadSettuwebTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upload_settuwebs', function (Blueprint $table) {
            $table->string('nama')->after('id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('upload_settuwebs', function (Blueprint $table) {
            $table->dropColumn('nama');
        });
    }
}
