<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'number_phone',
        'number_phone_alternative',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getJWTIdentifier() {
        return $this->getKey();
    }
    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims() {
        return [];
    } 

    protected static function storage($data){
    
        $dataUser = [];
        $dataUser['name'] = $data['name'];
        $dataUser['email'] = $data['email'];
        $dataUser['number_phone'] = $data['number_phone'];
        $dataUser['number_phone_alternative'] = $data['number_phone_alternative'];
        $dataUser['password'] = bcrypt($data['password']);
        
        return User::create($dataUser);
    }
    protected static function isActive($status){
        
        if($status){
            return true;
        }else{
            return false;
        }
    }
    public function address(){

        return $this->morphMany(Address::class, 'addres_morph');
    }
    public function image(){
        
        return $this->morphMany(Images::class, 'imagebleMorph');
    }
    public static function updateUser($user_id, $data){

        return User::where('id', $user_id)->update($data);
    }
    public static function desableOrEnableUser($id){

        $status = (User::find($id)->status) ? 0 : 1;
        return User::where('id', $id)->update(['status' => $status]);
    }
    public static function deleteUser($id){

        return User::where('id', $id)->delete();
    }
    public static function updatePassword($user_id, $data){
        $passwrod = bcrypt($data['password']);
        return User::where('id', $user_id)->update(['password' => $passwrod]);
    }
}
