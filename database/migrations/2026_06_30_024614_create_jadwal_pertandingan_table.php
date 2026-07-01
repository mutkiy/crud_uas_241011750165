<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('jadwal_pertandingan', function (Blueprint $table) {
        $table->id('id_event'); // ID Event
        $table->string('gambar')->nullable(); // Gambar
        $table->string('nama_event'); // Nama Event
        $table->date('tanggal'); // Tanggal
        $table->string('tempat'); // Tempat
        $table->string('penanggung_jawab'); // Penanggung Jawab
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_pertandingan');
    }
};
