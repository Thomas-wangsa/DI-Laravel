<?php

namespace App\Repositories;

use App\Http\Traits\Nigorice\TraitNigorice;

/*
|--------------------------------------------------------------------------
| Class Dependency Injection
|--------------------------------------------------------------------------
| @author Thomas
|
*/

class NigoriceRepo implements NigoriceInterface {	

  /*
  |--------------------------------------------------------------------------
  | Trait for CRUD function in Nigorice Table
  | get_all_data      : get all active data from Nigorice Table
  | get_specific_data : get specific active data from Nigorice Table
  | createNew         : add new data in Nigorice Table
  | update            : update data in Nigorice Table
  |--------------------------------------------------------------------------
  | @author Thomas
  |
  */

	use TraitNigorice;

	public function get_all_data() {
		return $this->GetAllDataNigorice();
	}

	public function get_specific_data($request) {
		return $this->GetSpecificData($request);
	}

	public function createNew($request) {
		$this->CreateNigorice($request);
	}

	public function update($request) {
		$this->UpdateData($request);
	}
}