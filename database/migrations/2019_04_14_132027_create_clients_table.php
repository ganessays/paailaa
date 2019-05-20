<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_name')->nullable();
            $table->string('slug')->nullable();
            $table->integer('company_nature_id')->nullable();
            $table->integer('district_id')->nullable();
            $table->string('address')->nullable();
            $table->string('logo')->nullable();
            $table->string('banner')->nullable();
            $table->string('featured_image')->nullable();
            $table->string('website')->nullable();
            $table->string('office_contact')->nullable();
            $table->string('mobile')->nullable();
            $table->enum('status',['active','inactive'])->default('active');
            $table->enum('company_type',['general','featured','sponser'])->default('general');
            $table->string('com_establised')->nullable();
            $table->string('contact_person')->nullable();
            $table->longText('company_profile')->nullable();
            $table->integer('user_id')->nullable();
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
        Schema::dropIfExists('clients');
    }
}
