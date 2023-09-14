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
        Schema::create('tb_kandidats', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->string('nm_kandidat');
            $table->string('nomor');
            $table->text('visi');
            $table->text('misi');
            $table->text('jurusan');
            $table->string('angkatan');
            $table->string('photo', 250);
            $table->integer('suara')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_kandidats');
    }
};
