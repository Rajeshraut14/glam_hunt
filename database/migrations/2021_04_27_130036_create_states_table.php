<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_states', function (Blueprint $table) {
            $table->id();
          $table->string('name',100);
          $table->mediumInteger('country_id');
          $table->char('country_code',5);
        $table->string('fips_code',100);
          $table->string('iso2',100);
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
        Schema::dropIfExists('master_states');
    }
}
