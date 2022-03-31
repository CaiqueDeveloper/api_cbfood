<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'company_id' => 1,
            'name' => 'User Teste  ',
            'email' => 'userteste@gmail.com',
            'number_phone' => '00000000',
            'number_phone_alternative' => '00000000',
            'password' => Hash::make('12345678'),
        ]);
    }
}
