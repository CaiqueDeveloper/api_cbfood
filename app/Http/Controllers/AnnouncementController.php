<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function getAllAnnoucement(){

        return ['reponse' =>[
            'success' => true,
            'sate' => 200,
            'content' => 'Hello my firend'
            ]];
    }
    public function storageAnnouncement(Request $request){
        dd($request->all());
    }
}
