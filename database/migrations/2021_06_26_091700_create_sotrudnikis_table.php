<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSotrudnikisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sotrudnikis', function (Blueprint $table) {
            $table->id();
            $table->string('Nom');
            $table->string('Familiya');
            $table->string('Otchestvo');
            $table->string('Jins');
            $table->string('Z_Plata');
            $table->string('Otdeli');

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
        Schema::dropIfExists('sotrudnikis');
    }
}
