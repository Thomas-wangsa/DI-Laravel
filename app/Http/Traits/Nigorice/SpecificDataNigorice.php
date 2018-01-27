<?php
namespace App\Http\Traits\Nigorice;

use App\Http\Models\Nigorice;

/*
|--------------------------------------------------------------------------
| Trait Information
|--------------------------------------------------------------------------
| @author Thomas
| SpecificDataNigorice()      : get specific data from uuid
|
*/

trait SpecificDataNigorice {
	
	public function GetSpecificData($request) {
        return Nigorice::fromUUID($request->uuid)->first();
	}

}