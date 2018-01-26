<?php
namespace App\Http\Traits\Nigorice;

use App\Http\Models\Nigorice;
use Faker\Factory as Faker;

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