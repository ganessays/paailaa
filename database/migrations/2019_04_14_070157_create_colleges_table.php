<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colleges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('College_name');
            $table->integer('College_nature_id');
            $table->integer('country_id');
            $table->integer('district_id');
            $table->string('College_address');
            $table->string('logo')->nullable();
            $table->string('banner')->nullable();
            $table->string('featured_image')->nullable();
            $table->string('website');
            $table->string('office_contact');
            $table->string('mobile');
            $table->enum('status',['1','2'])->default('1');
            $table->enum('College_type',['General','Featured','Sponser'])->default('General');
            $table->binary('com_establised');
            $table->string('contact_person');
            $table->longText('College_profile');
            $table->integer('user_id');
            $table->bigInteger('views')->nullable();
            $table->string('username')->nullable();
            $table->string('pWord')->nullable();
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
        Schema::dropIfExists('colleges');
    }
}
