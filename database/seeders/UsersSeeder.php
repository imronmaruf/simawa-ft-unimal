<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $users = [
            [
                'name' => 'Super Admin',
                'username' => 'Suadmin',
                'email' => 'superadmin@gmail.com',
                'password' => Hash::make('1234567'),
                'role' => '1',
            ],
            [
                'name' => 'Admin',
                'username' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('1234567'),
                'role' => '2',
            ]
        ];

        foreach ($users as $key => $value) {
            User::create($value);
        };
    }
}
