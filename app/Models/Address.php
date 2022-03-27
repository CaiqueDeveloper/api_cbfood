<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable = ['states', 'zipe_code','city', 'distric', 'road', 'number'];

    public function addres_morph(){
        
        return $this->morphTo();
    }

    public function storageAddressUser($user_id, $data){
       
        $user = User::find($user_id);
        return $user->address()->create($data);
    }
    public function storageAddressCompany($company_id, $data){

        $company = Company::find($company_id);
        
        return $company->address()->create($data);
    }   

}
