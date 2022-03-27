<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(LoginRequest $request){
     
        $response = [];

        $creds = $request->only('email', 'password');
        $token = Auth::attempt($creds);

        if(!$token){
            $response['error'] = 'E-mail e/ou Senha incorreto !';
            return $response;
        }

        if(User::isActive(auth()->user()->status)){
          
            if(Company::isActive(auth()->user()->company_id)){
                return response()->json([
                    'access_token' => $token,
                    'token_type' => 'bearer',
                ]);
            }else{
                return $response['error'] = " Opss! Notamos que a empresa que você está tentando logar se encontra inativa. 
                Por favor entre em contato com nosso suporte técnico.";
            }
        }else{
            return $response['error'] = "Opss ! Usuário não se encontra ativo. Por favor entre em contato com nosso suporte técnico";
        }

        
    }
}