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
        Schema::create('tool_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_permintaan');
            $table->string('id_alat');
            $table->string('user_peminta');
            $table->string('user_penyerah');
            $table->string('user_penerima');
            $table->string('user_penyetuju');
            $table->date('tgl_permintaan');
            $table->string('status_penyetuju');
            $table->string('status_penyerah');
            $table->string('status_penerima');
            $table->date('tgl_kembali');
            $table->string('kondisi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tool_requests');
    }
};
