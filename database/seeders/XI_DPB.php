<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XI_DPB extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data pengguna dari kelas XI DPB
        $data = [
            [ 'name' => 'AIRA QINNAVISYA PRABOWO', 'kelas' => 'XI DPB', 'email' => 'airaqinnavisyaprabowo@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0023' ],
            [ 'name' => 'CHERRYL NAURA LOPULUA', 'kelas' => 'XI DPB', 'email' => 'cherrylnauralopulua@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0337' ],
            [ 'name' => 'CLARA APRILIA MANOPO', 'kelas' => 'XI DPB', 'email' => 'claraapriliamanopo@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0282' ],
            [ 'name' => 'DELA RISTA BELA', 'kelas' => 'XI DPB', 'email' => 'delaristabela@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0184' ],
            [ 'name' => 'ENI NURAENI', 'kelas' => 'XI DPB', 'email' => 'eninuraeni@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0272' ],
            [ 'name' => 'LATIFAH KURNIASIH', 'kelas' => 'XI DPB', 'email' => 'latifahkurniasih@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0313' ],
            [ 'name' => 'LENGKANA ANNAZMI', 'kelas' => 'XI DPB', 'email' => 'lengkanaannazmi@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0310' ],
            [ 'name' => 'NATASYA AUGUSTA MARDANY', 'kelas' => 'XI DPB', 'email' => 'natasyaaugustamardany@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0379' ],
            [ 'name' => 'SALSYA AGUSTINA', 'kelas' => 'XI DPB', 'email' => 'salsyaagustina@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0269' ],
            [ 'name' => 'SITI NUR HIKMAH', 'kelas' => 'XI DPB', 'email' => 'sitinurhikmah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0162' ],
            [ 'name' => 'SYAFA NURISAR', 'kelas' => 'XI DPB', 'email' => 'syafanurisar@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0232' ],
            [ 'name' => 'SYALBIATU SYAHWA', 'kelas' => 'XI DPB', 'email' => 'syalbiatusyahwa@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0041' ],
            [ 'name' => 'ZAHRA SAIKHILA', 'kelas' => 'XI DPB', 'email' => 'zahrasaikhila@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0361' ],
        ];

        // Looping untuk membuat setiap record User
        foreach ($data as $user) {
            User::create($user);
        }
    }
}