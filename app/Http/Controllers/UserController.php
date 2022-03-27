<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorageUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function storageUser(StorageUserRequest $request){
        
        if(User::storage($request->all()))
            return response()->json('Parabéns Usuário Cadastrado com Sucesso', 200);
    }
    public function getAddressUser(){
        
       $user = User::find(auth()->user()->id);

       return $user->address;
    }
}
