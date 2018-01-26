<?php

namespace App\Repositories;

use App\Http\Traits\Nigorice\Nigorice;

class NigoriceRepo implements NigoriceInterface {	

	use TraitNigorice;

  	public function get_all_data() {
  		return $this->GetAllDataNigorice();
  	}

  	public function get_specific_data($request) {
  		return $this->GetSpecificData($request);
  	}

  	public function createNew($request) {
  		$this->CreateNewNigorice($request);
  	}

  	public function update($request) {
  		$this->UpdateData($request);
  	}
}