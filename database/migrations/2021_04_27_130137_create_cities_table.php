<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_cities', function (Blueprint $table) {
            $table->id();
          $table->string('name',100);
          $table->mediumInteger('state_id');
          $table->string('state_code',50);
          $table->mediumInteger('country_id');
          $table->char('country_code',5);
         $table->decimal('latitude',10,8);
         $table->decimal('longitude',11,8);
            $table->timestamps();
         $table->tinyInteger('flag');
         $table->string('wikiDataId',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_cities');
    }
}
