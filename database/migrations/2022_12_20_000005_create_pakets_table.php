<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaketsTable extends Migration
{
    public function up()
    {
        Schema::create('pakets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_tagihan')->unique();
            $table->string('nama_paket');
            $table->decimal('tarif', 15, 2)->nullable();
            $table->string('cycle')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}