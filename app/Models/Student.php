<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public function country(){
        return $this->belongsTo(Country::class,'country_id');
    }
    
    public function myclass(){
        return $this->belongsTo(Myclass::class,'class_id');
    }

   
}
