<?php
namespace App\Http\Traits\Nigorice;

use Faker\Factory as Faker;

/*
|--------------------------------------------------------------------------
| Main Trait for CRUD Nigorice Table
|--------------------------------------------------------------------------
| @author Thomas
|
*/

trait TraitNigorice {
    use AllDataNigorice;
    use SpecificDataNigorice;
    use CreateNigorice;
    use UpdateNigorice;
}