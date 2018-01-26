<?php

namespace App\Repositories;
 
interface NigoriceInterface {
	public function get_all_data();
 	public function get_specific_data($request);
 	public function createNew($request);
 	public function update($request);
}