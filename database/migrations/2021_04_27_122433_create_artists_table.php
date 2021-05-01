<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username',100);
            $table->string('skill_id',100);
            $table->string('first_name',100);
            $table->string('last_name',100);
            $table->string('email',100)->unique();
            $table->integer('phone')->length(20)->unique();
            $table->string('profile_image',100)->nullable();
            $table->string('gender',20);
            $table->string('password',100);
            $table->string('address',200)->nullable();
            $table->string('city_id',25)->nullable();
            $table->string('state_id',25)->nullable();
            $table->string('country_id',25)->nullable();
            $table->string('pincode',25)->nullable();
            $table->string('interest',55)->nullable();
             $table->date('date_of_birth');
             $table->text('about')->nullable();
             $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('artists');
    }
}
