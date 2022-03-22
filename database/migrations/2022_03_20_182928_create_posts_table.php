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
            $table->string('post_title');
            $table->string('post_slug')->unique();
            $table->longText('post_desc');
            $table->string('post_image');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('user_id');
            $table->enum('status',['active','inactive']);
            $table->timestamps();
            $table->foreign('category_id')->on('categories')->references('id')->onDelete('cascade');
            $table->foreign('user_id')->on('users')->references('id')->onDelete('cascade');
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
