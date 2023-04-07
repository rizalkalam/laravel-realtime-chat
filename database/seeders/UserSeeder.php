<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'=>'Kalam',
            'avatar'=>'picture.jpg',
            'email'=>'rizalkalam@gmail.com',
            'password'=>bcrypt('password')
        ]);

        DB::table('users')->insert([
            'name'=>'Zumar',
            'avatar'=>'picture1.jpg',
            'email'=>'zumarramadhan@gmail.com',
            'password'=>bcrypt('zumar123')
        ]);

        DB::table('users')->insert([
            'name'=>'Wira',
            'avatar'=>'picture2.jpg',
            'email'=>'wirawdd@gmail.com',
            'password'=>bcrypt('wira123')
        ]);

        DB::table('users')->insert([
            'name'=>'Firdan',
            'avatar'=>'picture3.jpg',
            'email'=>'firdanaz@gmail.com',
            'password'=>'firdan123'
        ]);

        DB::table('users')->insert([
            'name'=>'Gavra',
            'avatar'=>'picture4.jpg',
            'email'=>'gavraganteng@gmail.com',
            'password'=>'gavra123'
        ]);
    }
}
