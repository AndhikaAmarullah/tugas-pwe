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
        Schema::create('detailpinjaman', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_buku')->constrained('buku')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_pinjaman')->constrained('pinjaman')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_jurnal')->constrained('jurnal')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_karyailmiah')->constrained('karyailmiah')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('denda');
            $table->string('status');
            $table->date('tanggal_kembali');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detailpinjaman');
    }
};
