<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorageCompanyRequest;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function storageCompany(StorageCompanyRequest $request){
        
        if(Company::storage($request->validated()))
            return response()->json('Parabéns Empresa Cadastrada com Sucesso', 200);
    }

    public function getCompany($id){

        $company = Company::find($id);
        if(!$company)
            return response()->json('Opss ! Algo deu errado, não conseguimos localizar essa empresa.', 400);

            return response()->json(compact('company'), 200);
    }

   public function upateCompany(Request $request){
       dd($request->all());
   }
}
