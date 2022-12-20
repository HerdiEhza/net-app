<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToListTagihansTable extends Migration
{
    public function up()
    {
        Schema::table('list_tagihans', function (Blueprint $table) {
            $table->unsignedBigInteger('nama_pelanggan_id')->nullable();
            $table->foreign('nama_pelanggan_id', 'nama_pelanggan_fk_7771384')->references('id')->on('pelanggans');
            $table->unsignedBigInteger('alamat_pelanggan_id')->nullable();
            $table->foreign('alamat_pelanggan_id', 'alamat_pelanggan_fk_7771385')->references('id')->on('pelanggans');
            $table->unsignedBigInteger('produk_id')->nullable();
            $table->foreign('produk_id', 'produk_fk_7771386')->references('id')->on('pakets');
            $table->unsignedBigInteger('harga_id')->nullable();
            $table->foreign('harga_id', 'harga_fk_7771387')->references('id')->on('pakets');
        });
    }
}