<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/*
|--------------------------------------------------------------------------
| Model Nigorice
|--------------------------------------------------------------------------
| @author Thomas
| https://laravel.com/docs/5.5/eloquent 
|
*/

class Nigorice extends Model
{	
    /*
    |--------------------------------------------------------------------------
    | Trait & Property information
    |--------------------------------------------------------------------------
    | @author Thomas
    | SoftDeletes   = removing not active rows in eloquent
    | $table        = table name
    | $fillable     = whitelist field
    | $primaryKey   = primary in eloquent
    | $dates        = flag of "deleted_at" field
    |
    */

	use SoftDeletes;
    protected $table = "nigorice";
    protected $fillable = ['date', 'max', 'min','uuid','created_at'];
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];

    /*
    |--------------------------------------------------------------------------
    | Eloquent Custom Function information
    |--------------------------------------------------------------------------
    | @author Thomas
    | scopeLastDate()   = order By DESC date
    | scopeCountID()    = count of active ID
    | scopeAvgMax()     = Average value of Max Field
    | scopeAvgMin()     = Average value of Min Field
    | scopeAvgVar()     = the calculation of AvgMax and AvgMin
    | scopefromUUID()   = eloquent where from uuid
    |
    */

    public function scopeLastDate($query) {
        return $query->orderBy('date', 'desc');
    }

    public function scopeCountID($query) {
        return $query->count();
    }

    public function scopeAvgMax($query) {
    	return $query->sum('max')/Nigorice::CountID();
    }

    public function scopeAvgMin($query) {
    	return $query->sum('min')/Nigorice::CountID();
    }

    public function scopeAvgVar($query) {
    	return $query->AvgMax()-$query->AvgMin();
    }

    public function scopefromUUID($query,$uuid){
        return $query->where('uuid',$uuid);
    }

}
