<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Update extends Model
{
    use HasFactory;
    protected $fillable = ['activity_id','user_id','type'];
    public function scopeWhereDateBetween ($query,$fieldName, $fromDate,$toDate){
        return $query->whereDate($fieldName,'>=', $fromDate)->whereDate($fieldName,'<=',$toDate);
    }
    public function activity (){
        
        return $this->belongsTo('\App\Models\Activity');
    }
}
