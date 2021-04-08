<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('phone');
            $table->string('image');
            $table->integer('movie_id')->nullable()->unsigned();
            $table->integer('director_id')->nullable()->unsigned();
            $table->integer('actor_id')->nullable()->unsigned();
            $table->integer('actress_id')->nullable()->unsigned();
            $table->integer('writer_id')->nullable()->unsigned();
            $table->integer('blog_id')->nullable()->unsigned();
            $table->text('comments');
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
        Schema::dropIfExists('comments');
    }
}
