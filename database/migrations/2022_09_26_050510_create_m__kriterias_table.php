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
        Schema::create('m__kriterias', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kriteria');
            $table->integer('bobot');
            $table->enum('jenis_kriteria', ['Benefit', 'Cost']);
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
        Schema::dropIfExists('m__kriterias');
    }
};
