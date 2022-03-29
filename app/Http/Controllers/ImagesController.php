<?php

namespace App\Http\Controllers;

use App\Models\Images;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    public function storagePictureProfileUser(Request $request){

        $user_id = (int)$request->only('user_id');
        $data = $request->except('user_id');

        if(Images::storagePictureProfileUser($user_id, $data))
            return response()->json('Parabéns Upload feito com sucesso.', 200);
        

    }
}
