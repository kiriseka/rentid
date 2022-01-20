<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rents', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('kode_rent');
            $table->integer('kode_customer');
            $table->string('kode_kendaraan');
            $table->integer('no_kendaraan');
            $table->integer('harga');
            $table->timestamps();
            $table->date('tanggal_sewa');
            $table->date('tanggal_selesai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rents');
    }
}
