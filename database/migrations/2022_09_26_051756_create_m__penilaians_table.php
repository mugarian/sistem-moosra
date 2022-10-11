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
        Schema::create('m__penilaians', function (Blueprint $table) {
            $table->id();
            $table->foreignId('alternatif_id');
            $table->foreignId('sub_kriteria1_id');
            $table->foreignId('sub_kriteria2_id');
            $table->foreignId('sub_kriteria3_id');
            $table->foreignId('sub_kriteria4_id');
            $table->foreignId('sub_kriteria5_id');
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
        Schema::dropIfExists('m__penilaians');
    }
};
