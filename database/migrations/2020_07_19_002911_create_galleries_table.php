<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->string('gallery_title');
            $table->string('gallery_desc');
            $table->unsignedBigInteger('post_id')->index();
            $table->string('filename');
            $table->timestamps();
        });

        Schema::table('galleries', function(Blueprint $table) {
            $table->foreign('post_id')->references('id')->on('posts');
        });         

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galleries');
    }
}
