<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'mousto',
                'email' => 'mousto@gmail.com',
                'password' => Hash::make('mousto')
            ],
            [
                'name' => 'capo',
                'email' => 'capo@gmail.com',
                'password' => Hash::make('capo')
            ],
            [
                'name' => 'toto',
                'email' => 'toto@gmail.com',
                'password' => Hash::make('toto')
            ]
        ]);
    }
}
