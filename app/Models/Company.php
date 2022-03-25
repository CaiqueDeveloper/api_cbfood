<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    
    protected static function isActive($id){

        $hasActive = Company::find($id);
        if($hasActive->status){
            return true;
        }else{
            return false;
        }
    }
}
