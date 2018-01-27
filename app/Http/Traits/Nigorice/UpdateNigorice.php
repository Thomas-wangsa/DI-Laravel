<?php
namespace App\Http\Traits\Nigorice;

use App\Http\Models\Nigorice;

/*
|--------------------------------------------------------------------------
| Trait Information
|--------------------------------------------------------------------------
| @author Thomas
| UpdateData($request)      : logic to update data with eloquent
| https://laravel.com/docs/5.5/eloquent
|
*/

trait UpdateNigorice {
	
	public function UpdateData($request) {
        $data = [
            'max'   		=> $request->max,
            'min'   		=> $request->min
        ];
        Nigorice::fromUUID($request->uuid)->update($data);
	}


}