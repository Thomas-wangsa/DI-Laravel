<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartTable extends Migration
{
    /*
    |--------------------------------------------------------------------------
    | Migration for cart Table for Nigorice Test # 2
    | https://laravel.com/docs/5.5/migrations
    |--------------------------------------------------------------------------
    | @author Thomas
    | up()          : migrate & set the fields of table
    | down()        : drop table nigorice  
    |
    */
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product');
            $table->integer('quantity');
            $table->smallInteger('status')->default(1);
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
        Schema::dropIfExists('cart');

    }
}
