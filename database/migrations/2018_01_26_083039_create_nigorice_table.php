<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNigoriceTable extends Migration
{
    /*
    |--------------------------------------------------------------------------
    | Migration for Nigorice Table
    | https://laravel.com/docs/5.5/migrations
    |--------------------------------------------------------------------------
    | @author Thomas
    | up()          : migrate & set the fields of table
    | down()        : drop table nigorice  
    |
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

    public function down()
    {
        Schema::dropIfExists('nigorice');
    }
}
