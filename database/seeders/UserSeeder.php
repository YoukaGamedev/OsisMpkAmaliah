<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Admin Pembina',
                'email' => 'admin@pemilu.com',
                'password' => Hash::make('password123'),
                'role' => 'admin_pembina',
                'sekolah' => 'Guru',
                'nis' => '0001',
            ],
            [
                'name' => 'Siswa A1',
                'email' => 'siswaa1@gmail.com',
                'password' => Hash::make('password123'),
                'role' => 'user',
                'sekolah' => 'A1',
                'nis' => '23.5.0111',
            ],
            [
                'name' => 'Siswa A2',
                'email' => 'siswaa2@gmail.com',
                'password' => Hash::make('password123'),
                'role' => 'user',
                'sekolah' => 'A2',
                'nis' => '23.5.0112',
            ],
        ];

        foreach ($data as $user) {
            User::create($user);
        }
    }
}
