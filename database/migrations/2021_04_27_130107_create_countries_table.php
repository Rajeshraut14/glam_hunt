<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_countries', function (Blueprint $table) {
            $table->id();
          $table->string('name',100);
         $table->char('iso3',10);
          $table->char('iso2',10);
         $table->string('phonecode',100);
          $table->string('capital',100);
          $table->string('currency',100);
          $table->string('native',100);
         $table->string('emoji',100);
          $table->string('emojiU',100);
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
        Schema::dropIfExists('master_countries');
    }
}
