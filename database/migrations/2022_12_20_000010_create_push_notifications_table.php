<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePushNotificationsTable extends Migration
{
    public function up()
    {
        Schema::create('push_notifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->datetime('waktu_dikirim');
            $table->string('judul')->nullable();
            $table->string('isi_notifikasi')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}