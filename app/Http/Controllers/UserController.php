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
    public function getAddressUser($id){
        
       $user = User::find($id);
       if(!$user)
            return response()->json('Opss! algo deu errado, não encotramos o usuario informado.', 400);
            $address = $user->address;

       if(!$address)
            return response()->json('Opss! algo deu errado, não encotramos o nenhum endereço para esse usuario.', 400);
            return response()->json(compact('address'), 200);
    }
    public function getUser($id){
       
        $user = User::find($id);
        if(!$user)
            return response()->json('Opss! algo deu errado, não encotramos o usuario informado.', 400);

        return response()->json(compact('user'), 200);
    }
    public function updateUser(Request $request){
        $user_id = (int)$request->user_id;
        $data = $request->except('user_id');

        if(User::updateUser($user_id, $data))
            return response()->json('Parabéns Usuário Editado com Sucesso', 200);
    }
    public function desableUser($id){

        if(User::desableOrEnableUser($id))
            return response()->json('Parabéns Usuário Desativado com Sucesso', 200);
    }
    public function enableUser($id){

        if(User::desableOrEnableUser($id))
            return response()->json('Parabéns Usuário Ativado com Sucesso', 200);
    }
    public function deleteUser($id){
        if(User::deleteUser($id))
            return response()->json('Parabéns Usuário Deletado com Sucesso', 200);
    }
    public function updatePassword(Request $request){
       
        $user_id = (int) $request->only('user_id');
        $data = $request->except('user_id');

        if(User::updatePassword($user_id, $data))
            return response()->json('Parabéns Senha Alterada com Sucesso', 200);
    }
}
