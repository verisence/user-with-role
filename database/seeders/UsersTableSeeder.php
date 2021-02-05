<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'superadmin',
            'email'=>'superadmin@mail.mail',
            'role'=>1,
            'password'=>bcrypt('password')
        ]);
        DB::table('users')->insert([
            'name'=>'admin',
            'email'=>'admin@mail.mail',
            'role'=>2,
            'password'=>bcrypt('password')
        ]);
        DB::table('users')->insert([
            'name'=>'user',
            'email'=>'user@mail.mail',
            'role'=>3,
            'password'=>bcrypt('password')
        ]);
    }
}
