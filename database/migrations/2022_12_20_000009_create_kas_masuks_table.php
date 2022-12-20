<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKasMasuksTable extends Migration
{
    public function up()
    {
        Schema::create('kas_masuks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tanggal_transaksi');
            $table->string('keterangan')->nullable();
            $table->decimal('nominal_transaksi', 15, 2);
            $table->timestamps();
            $table->softDeletes();
        });
    }
}