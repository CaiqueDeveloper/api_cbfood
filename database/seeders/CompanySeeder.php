<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('companies')->insert([
            'name' => 'Company Teste  ',
            'email' => 'companyteste@gmail.com',
            'cnpj' => '35089909000142',
       ]);
    }
}
