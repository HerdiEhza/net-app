<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelanggansTable extends Migration
{
    public function up()
    {
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('nama_lengkap');
            $table->string('perusahaan')->nullable();
            $table->string('alamat');
            $table->string('nomor_hp');
            $table->string('nomor_whatsapp')->nullable();
            $table->string('nomor_ktp')->nullable();
            $table->string('nomor_virtual_account')->nullable();
            $table->datetime('tanggal_pemasangan');
            $table->string('lokasi_pemasangan');
            $table->string('reseller')->nullable();
            $table->string('catatan')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}