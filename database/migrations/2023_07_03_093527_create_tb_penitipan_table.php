<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPenitipanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_penitipan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_ktp');
            $table->string('nama');
            $table->string('no_telp');
            $table->string('alamat');
            $table->string('jenis_hewan');
            $table->string('keterangan_hewan');
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
        Schema::dropIfExists('tb_penitipan');
    }
}
