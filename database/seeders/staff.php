<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class staff extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=> 'omar',
            'email'=> 'admin@gmail.com',
            'password'=> 12341234,

        ]);
        DB::table('users')->insert([
            'name'=> 'faruk',
            'email'=> 'user@gmail.com',
            'password'=> 12345678,

        ]);
    }
}
