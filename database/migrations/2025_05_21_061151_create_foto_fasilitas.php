<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foto_fasilitas', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('foto');
            $table->unsignedBigInteger('nama_fasilitas');

            // relasi
            $table->foreign('nama_fasilitas')->references('nama_fasilitas')->on('fasilitas')->oneDelete('cascade');
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
        Schema::dropIfExists('foto_fasilitas');
    }
};
