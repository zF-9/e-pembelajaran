<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->id();
            $table->string('jawatan');
            $table->string('gred');
            $table->string('agensi');
            $table->string('email');
            $table->string('alamat');
            $table->unsignedBigInteger('user_id')->index();
        });

        Schema::table('authors', function(Blueprint $table) {
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
        Schema::dropIfExists('authors');
    }
}