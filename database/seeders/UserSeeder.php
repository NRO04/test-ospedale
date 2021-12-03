<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_users')->insert([
            "name" => "RO",
            'email' => 'admin@example.com',
            'nit' => "578",
            "password" => bcrypt('123456'),
            "gender" => "Male",
            "date_birth" => "2005-02-08",
            "phone" => "25484",
            "rol_id" => "1",
            "eps_id" => "1"
        ]);
    }
}
