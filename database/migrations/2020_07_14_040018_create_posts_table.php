<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('date_publish');
            $table->string('date_start');
            $table->string('date_end');
            $table->string('category');
            $table->string('location');
            $table->string('organizer');
            $table->string('paperwork_title');
            $table->string('paperwork_file');
            $table->string('paperwork_desc');
            $table->string('note_title');
            $table->string('note_file');
            $table->string('note_desc');
            $table->string('gallery_title');
            $table->string('gallery_file');
            $table->string('gallery_desc');
            $table->unsignedBigInteger('user_id')->index();
        });

        Schema::table('posts', function(Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });         

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}