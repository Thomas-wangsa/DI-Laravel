<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        // Populate date in Table Master Internal User
        factory(App\Http\Models\Users::class)->create([
            'email'         => "nicholas@sirclo.co.id",
            'password'      => Hash::make("nigorice")
            ]);
        
    }
}
