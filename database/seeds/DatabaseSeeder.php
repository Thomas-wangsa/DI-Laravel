<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder
{
    
    /*
    |--------------------------------------------------------------------------
    | Run the database seeds.
    | UsersTableSeeder      : Populate User Table
    | NigoriceTableSeeder   : Populate Nigorice Table
    |--------------------------------------------------------------------------
    | @author Thomas
    | @return void
    |
    */
    
    public function run()
    {	
    	Model::unguard();
        
            $this->call(UsersTableSeeder::class);
            $this->call(NigoriceTableSeeder::class);
        
        Model::reguard();
    }
}
