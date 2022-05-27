<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Activity extends Model
{
    use HasFactory;
    protected $fillable = ['activity'];
    public function remarks() {
       return $this->hasMany('\App\Models\Remark');
    }
    public function updates(){
        return $this->hasMany('\App\Models\Update');
    }
    public function scopeWhereDateBetween ($query,$fieldName, $fromDate,$toDate){
        return $query->whereDate($fieldName,'>=', $fromDate)->whereDate($fieldName,'<=',$toDate);
    }
}
