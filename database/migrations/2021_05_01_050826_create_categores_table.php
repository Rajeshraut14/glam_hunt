<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categores', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('parent_id');
            $table->tinyInteger('show_in_navigation')->default(0);
            $table->tinyInteger('is_featured')->default(0); 
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
        Schema::dropIfExists('categores');
    }
}
