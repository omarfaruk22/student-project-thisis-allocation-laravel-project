<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate(
            [
                'id'        => 1
            ],
            [
                    'name'      => 'Admin',
                    'email'     => 'admin@gmail.com',
                    'password'  => Hash::make('12345678'),
                    'role'      => 1,
            ]);
    }
}
