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
        $calculation['avg_max']     = number_format(Nigorice::AvgMax(),2);
        $calculation['avg_min']     = number_format(Nigorice::AvgMin(),2);
        $calculation['avg_var']     = number_format(Nigorice::AvgVar(),2);
        return $calculation;
    }


}