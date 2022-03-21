<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorageUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function storageUser(StorageUserRequest $request){
        
        User::create($request->all());
    }
}
