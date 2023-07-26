<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('calibrations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_kalibrasi');
            $table->integer('id_alat');
            $table->date('tanggal_kalibrasi');
            $table->string('petugas_penerima');
            $table->string('petugas_menyerahkan');
            $table->date('thl_berakhirnya_masa_kalibrasi');
            $table->text('ket_kalibrasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calibrations');
    }
};
