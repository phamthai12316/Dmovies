<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('poster')->nullable();
            $table->string('cover')->nullable();
            $table->integer('genre_id')->unsigned();
            $table->integer('director_id')->unsigned();
            $table->integer('writer_id')->unsigned();
            $table->integer('actor_id')->unsigned();
            $table->integer('actress_id')->unsigned();
            $table->integer('year_id')->unsigned();
            $table->string('cast');
            $table->text('desc');
            $table->string('keywd');
            $table->string('video_link');

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
        Schema::dropIfExists('movies');
    }
}
