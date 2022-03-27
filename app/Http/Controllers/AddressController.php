<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function storageAddressUser(Request $request){

        $user_id = (int)$request->only('user_id');
        $data = $request->except('user_id');

        if(Address::storageAddressUser($user_id, $data))
            return response()->json('Parabéns O Endereço do Usuário foi Cadastrado com Sucesso', 200);
        

    }
    public function storageAddressCompany(Request $request){

        $company_id = (int)$request->only('company_id');
        $data = $request->except('company_id');
       
        if(Address::storageAddressCompany((int)$company_id, $data))
            return response()->json('Parabéns O Endereço da Empresa foi Cadastrado com Sucesso', 200);
    }
}
