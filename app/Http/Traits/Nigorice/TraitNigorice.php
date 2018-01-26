<?php
namespace App\Http\Traits\Nigorice;

use App\Http\Models\Nigorice;
use Faker\Factory as Faker;

trait TraitNigorice {
	
	public function GetAllDataNigorice() {
        $response['data']           = Nigorice::LastDate();
        $response['calculation']    = $this->calculation(); 		
	}

    public function calculation() {
        
    }


}