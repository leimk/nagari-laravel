<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('manfaat');
            $table->string('no-pk');
            $table->string('no-ktp');
            $table->date('sdate');
            $table->date('edate');
            $table->date('tglLahir');
            $table->integer('periodeLength');
            $table->float('rate');
            $table->string('jenisKelamin');
            $table->string('pekerjaan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data');
    }
}
