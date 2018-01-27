<?php

use Illuminate\Database\Seeder;

class NigoriceTableSeeder extends Seeder
{
    /*
    |--------------------------------------------------------------------------
    | Populate Nigorice Table 
    | Create 5 dummy data with factory
    |--------------------------------------------------------------------------
    | @author Thomas
    | @return void
    |
    */
    
    public function run()
    {
        factory(App\Http\Models\Nigorice::class,5)->create();
    }
}
