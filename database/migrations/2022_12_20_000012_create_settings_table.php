<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_usaha')->nullable();
            $table->string('admin_email')->nullable();
            $table->string('nama_usaha_singkat')->nullable();
            $table->string('alamat_usaha')->nullable();
            $table->integer('no_hp')->nullable();
            $table->integer('no_whatsapp')->nullable();
            $table->string('email_perusahaan')->nullable();
            $table->string('rekening_bank')->nullable();
            $table->integer('ppn')->nullable();
            $table->date('tanggal_jatuh_tempo')->nullable();
            $table->string('use_logo')->nullable();
            $table->string('unique_code')->nullable();
            $table->integer('biaya_admin')->nullable();
            $table->string('map_center')->nullable();
            $table->string('pesan_wa_tagihan')->nullable();
            $table->string('pesan_tagihan_lunas')->nullable();
            $table->string('teks_login')->nullable();
            $table->string('editor_tagihan')->nullable();
            $table->string('format_print_pos')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}