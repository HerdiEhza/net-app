<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToSupportTicketsTable extends Migration
{
    public function up()
    {
        Schema::table('support_tickets', function (Blueprint $table) {
            $table->unsignedBigInteger('pelanggan_id')->nullable();
            $table->foreign('pelanggan_id', 'pelanggan_fk_7771418')->references('id')->on('pelanggans');
        });
    }
}