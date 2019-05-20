<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->integer('user_id')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('start_at')->nullable();
            $table->string('end_at')->nullable();
            $table->enum('status',['publish','draft','trash'])->nullable();
            $table->enum('type',['news','article','forum'])->nullable();
            $table->string('image')->nullable();
            $table->text('detail')->nullable();
            $table->integer('views')->default(0);
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
        Schema::dropIfExists('posts');
    }
}
