<?php
namespace App\Http\Traits\Nigorice;

use App\Http\Models\Nigorice;
use Faker\Factory as Faker;

/*
|--------------------------------------------------------------------------
| Trait Information
|--------------------------------------------------------------------------
| @author Thomas
| CreateNigorice()      : logic to add new data with eloquent
| https://laravel.com/docs/5.5/eloquent
|
*/

trait CreateNigorice {
	
	public function CreateNigorice($request) {
  		$faker = Faker::create();
        $data = [
            'date'          => $request->date,
            'max'           => $request->max,
            'min'           => $request->min,
            'uuid'          => $faker->uuid,
            'created_at'    => date("Y-m-d H:i:s")
        ];
        Nigorice::firstOrCreate($data);
	}


}