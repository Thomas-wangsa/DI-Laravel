<?php
namespace App\Http\Traits\Nigorice;

use App\Http\Models\Nigorice;

trait UpdateNigorice {
	
	public function UpdateData($request) {
        $data = [
            'max'   		=> $request->max,
            'min'   		=> $request->min
        ];
        Nigorice::fromUUID($request->uuid)->update($data);
	}


}