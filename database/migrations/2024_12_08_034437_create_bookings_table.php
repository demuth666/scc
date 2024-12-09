<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('room_id')->references('id')->on('rooms')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('nama_lengkap');
            $table->string('nama_komunitas');
            $table->string('alamat');
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('telepon');
            $table->string('nama_kegiatan');
            $table->text('deskripsi_kegiatan');
            $table->date('tanggal');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('status')->default('belum diverifikasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
