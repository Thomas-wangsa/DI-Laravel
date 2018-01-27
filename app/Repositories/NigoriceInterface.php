<?php

namespace App\Repositories;

/*
|--------------------------------------------------------------------------
| Interface function
|--------------------------------------------------------------------------
| @author Thomas
|
*/

interface NigoriceInterface {
	public function get_all_data();
 	public function get_specific_data($request);
 	public function createNew($request);
 	public function update($request);
}