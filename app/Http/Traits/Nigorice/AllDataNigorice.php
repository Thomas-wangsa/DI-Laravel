<?php
namespace App\Http\Traits\Nigorice;

use App\Http\Models\Nigorice;

trait AllDataNigorice {
	
	public function GetAllDataNigorice() {
        $response['data']           = Nigorice::LastDate()->get();
        $response['calculation']    = $this->calculation();
        return $response; 		
	}

    private function calculation() {
        $calculation['avg_max']     = Nigorice::AvgMax();
        $calculation['avg_min']     = Nigorice::AvgMin();
        $calculation['avg_var']     = Nigorice::AvgVar();
        return $calculation;
    }


}