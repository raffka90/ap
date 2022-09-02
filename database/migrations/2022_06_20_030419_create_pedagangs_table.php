<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedagangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            // $table->string('tempat_lahir');
            // $table->date('tanggal_lahir');
            $table->date('tanggal_sewa');
            $table->date('tanggal_akhir');
            $table->string('no_hp');
            $table->bigInteger('lapaks_id');
            $table->string('alamat');
            $table->string('foto')->default('default.png');
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
        Schema::dropIfExists('pedagangs');
    }
};
