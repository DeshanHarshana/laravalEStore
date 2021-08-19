<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
        'name'=>'Deshan',
        'email'=>'n@gmail.com',
        'role'=>'admin',
        'password'=>Hash::make('deshan2233'),
        'remember_token'=>Str::random(10)
       ]);


    }
}
