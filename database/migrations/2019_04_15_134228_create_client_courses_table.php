<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('client_id')->nullable();
            $table->integer('course_id')->nullable();
            $table->string('duration')->nullable();
            $table->string('course_fee')->nullable();
            $table->string('detail')->nullable();
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
        Schema::dropIfExists('client_courses');
    }
}
