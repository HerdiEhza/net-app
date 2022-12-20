<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListTagihansTable extends Migration
{
    public function up()
    {
        Schema::create('list_tagihans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_tagihan')->nullable();
            $table->datetime('jatuh_tempo')->nullable();
            $table->string('pesan')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}