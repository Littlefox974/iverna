<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('year');
            $table->string('quality');
            $table->string('url');
            $table->timestamps();
        });

        Schema::create('genre2movie', function (Blueprint $table) {
            $table->integer('filmId');
            $table->integer('genreId');
            $table->primary(['filmId', 'genreId']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films');
        Schema::dropIfExists('genre2movie');
    }
}
