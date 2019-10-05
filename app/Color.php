<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $fillable = [
        'car_id' ,
        'status',
       
        
    ];
    public function user_id(){
        return $this->hasOne('\App\Car','id','user_id'); 
    }
}
