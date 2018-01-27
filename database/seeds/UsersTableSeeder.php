<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    
    /*
    |--------------------------------------------------------------------------
    | Populate User Table 
    | static email & password for Mr. Nicholas
    | the rest of them is use faker
    |--------------------------------------------------------------------------
    | @author Thomas
    | @return void
    |
    */

    public function run()
    {
        $faker = Faker\Factory::create();
        factory(App\Http\Models\Users::class)->create([
            'email'         => "nicholas@sirclo.co.id",
            'password'      => Hash::make("nigorice")
            ]);
        
    }
}
