<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XI_PPLG_3 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data pengguna dari kelas XII AN (berdasarkan file Excel/CSV)
        $data = [
            [ 'name' => 'ACHMAD KHALID MESHAL', 'kelas' => 'XII AN', 'email' => 'achmadkhalidmeshal@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0262' ],
           
        ];

        // Looping untuk membuat setiap record User
        foreach ($data as $user) {
            User::create($user);
        }
    }
}