<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class X_AK_2 extends Seeder
{
    public function run()
    {
        $data = [
            [ 'nis' => '25.6.0098', 'name' => 'ALISAH RAINI', 'kelas' => 'X AK 2', 'email' => 'alisahraini@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2' ],
            [ 'nis' => '25.6.0006', 'name' => 'ANDINA SYAFA', 'kelas' => 'X AK 2', 'email' => 'andinasyafa@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2' ],
            [ 'nis' => '25.6.0173', 'name' => 'BELA TRI JULIA', 'kelas' => 'X AK 2', 'email' => 'belatrijulia@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2' ],
            [ 'nis' => '25.6.0295', 'name' => 'ELFIA FINDIATI', 'kelas' => 'X AK 2', 'email' => 'elfiafindiati@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2' ],
            [ 'nis' => '25.6.0044', 'name' => 'HUSNA HUMAERO', 'kelas' => 'X AK 2', 'email' => 'husnahumaero@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2' ],
            [ 'nis' => '25.6.0025', 'name' => 'JELITA LESTARI', 'kelas' => 'X AK 2', 'email' => 'jelitalestari@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2' ],
            [ 'nis' => '25.6.0078', 'name' => 'KAYLLA SAFIRA', 'kelas' => 'X AK 2', 'email' => 'kayllasafira@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2' ],
            [ 'nis' => '25.6.0296', 'name' => 'MUHAMAD HARFIZAN AKBAR PRATAMA', 'kelas' => 'X AK 2', 'email' => 'muhamadharfizanakbarpratama@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2' ],
            [ 'nis' => '25.6.0207', 'name' => 'MUHAMAD RIZKI SYAH PUTRA', 'kelas' => 'X AK 2', 'email' => 'muhamadrizkisyahputra@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2' ],
            [ 'nis' => '25.6.0293', 'name' => 'MUHAMMAD NATHAN DARUSSALAM SANTANA', 'kelas' => 'X AK 2', 'email' => 'muhammadnathandarussalamsantana@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2' ],
            [ 'nis' => '25.6.0344', 'name' => 'NURUL ROHAIDA', 'kelas' => 'X AK 2', 'email' => 'nurulrohaida@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2' ],
            [ 'nis' => '25.6.0195', 'name' => 'RIKHA AMELIA', 'kelas' => 'X AK 2', 'email' => 'rikhaamelia@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2' ],
            [ 'nis' => '25.6.0067', 'name' => 'SANIATUL FAIZAH', 'kelas' => 'X AK 2', 'email' => 'saniatulfaziah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2' ],
            [ 'nis' => '25.6.0259', 'name' => 'SEYSHA RAMADHANI', 'kelas' => 'X AK 2', 'email' => 'seysharamadhani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2' ],
            [ 'nis' => '25.6.0322', 'name' => 'SITI AISYAH', 'kelas' => 'X AK 2', 'email' => 'sitiaisyah2@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2' ],
            [ 'nis' => '25.6.0127', 'name' => 'SITI PAUJHIAH', 'kelas' => 'X AK 2', 'email' => 'sitipaujhiah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2' ],
            [ 'nis' => '25.6.0143', 'name' => 'VESILE ELYA SAORI', 'kelas' => 'X AK 2', 'email' => 'vesileelyasaori@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2' ],
            [ 'nis' => '25.6.0024', 'name' => 'YULIMA HENDRA', 'kelas' => 'X AK 2', 'email' => 'yulimahendra@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2' ],
        ];

        foreach ($data as $user) {
            User::create($user);
        }
    }
}
