<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nigorice extends Model
{	
	use SoftDeletes;

    protected $table = "nigorice";
    protected $fillable = ['date', 'max', 'min','uuid','created_at'];
    protected $primaryKey = 'id';



    protected $dates = ['deleted_at'];

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
