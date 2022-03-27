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
}
