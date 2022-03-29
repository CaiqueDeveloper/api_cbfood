<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;
    protected $fillable = ['path'];

    public function imagebleMorph(){
        
        return $this->morphTo();
    }
    public static function storagePictureProfileUser($user_id, $data){

        $user = User::find($user_id);
        return $user->image()->create($data);
    }
}
