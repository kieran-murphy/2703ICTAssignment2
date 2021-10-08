<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFollowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('follows', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('followed_id');
            $table->integer('follower_id');

            /*$table->unsignedBigInteger('followed_id');
            $table->foreign('followed_id')->references('id')->on('users');
            $table->unsignedBigInteger('followed_id');
            $table->foreign('follower_id')->references('id')->on('products'); */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('follows');
    }
}
