<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNigoriceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nigorice', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date')->unique();
            $table->integer('max');   
            $table->integer('min'); 
            $table->uuid('uuid');    
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nigorice');
    }
}
