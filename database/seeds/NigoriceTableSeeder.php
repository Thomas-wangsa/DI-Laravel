<?php

use Illuminate\Database\Seeder;

class NigoriceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Http\Models\Nigorice::class,5)->create();
    }
}
