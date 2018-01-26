<?php
namespace App\Http\Traits\Nigorice;

use App\Http\Models\Nigorice;

trait SpecificDataNigorice {
	
	public function GetSpecificData($request) {
        return Nigorice::fromUUID($request->uuid)->first();
	}

}