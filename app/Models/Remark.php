<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remark extends Model
{
    use HasFactory;
    protected $fillable = ['remark','activity','user_id'];
    public function activity (){
        return $this->belongsTo('\App\Models\Activity');
    }
    public function user(){
        return $this->belongsTo('\App\Models\User');

    }
}
