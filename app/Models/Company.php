<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{   
    use HasFactory;
    protected $fillable = ['name','email', 'cnpj'];

    protected static function storage($data){
        
        return Company::create($data);
    }
    protected static function isActive($id){

        $hasActive = Company::find($id);
        if($hasActive->status){
            return true;
        }else{
            return false;
        }
    }
    public function address(){

        return $this->morphMany(Address::class, 'addres_morph');
    }
}
