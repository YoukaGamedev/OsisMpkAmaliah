<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class X_PPLG_3 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data pengguna dari kelas X PPLG 3 (berdasarkan file Excel/CSV)
        $data = [
            [ 'name' => 'AKBAR JANUAR SETIAWAN', 'kelas' => 'X PPLG 3', 'email' => 'akbarjanuarsetiawan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0152' ],
            [ 'name' => 'ARKAN RAKA MAULANA', 'kelas' => 'X PPLG 3', 'email' => 'arkanrakamaulana@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0284' ],
            [ 'name' => 'DANA PRATAMA PUTRA', 'kelas' => 'X PPLG 3', 'email' => 'daناpratamaputra@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0120' ],
            [ 'name' => 'EKO PRASETYO', 'kelas' => 'X PPLG 3', 'email' => 'ekoprasetyo@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0138' ],
            [ 'name' => 'FRANS UMBORA', 'kelas' => 'X PPLG 3', 'email' => 'fransumbora@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0288' ],
            [ 'name' => 'HASBI ARIF PIRDAUS', 'kelas' => 'X PPLG 3', 'email' => 'hasbiarifpirdaus@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0290' ],
            [ 'name' => 'KAFI MUHAMAD HADI', 'kelas' => 'X PPLG 3', 'email' => 'kafimuhamadhadi@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0243' ],
            [ 'name' => 'M. YOGA ADITIA PIRMANSYAH', 'kelas' => 'X PPLG 3', 'email' => 'myogaaditiapirmansyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0294' ],
            [ 'name' => 'MAULANA ALDIANSYAH', 'kelas' => 'X PPLG 3', 'email' => 'maulanaaldiansyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0122' ],
            [ 'name' => 'MOCH.SAEPUL REZKY', 'kelas' => 'X PPLG 3', 'email' => 'mochsaepulrezky@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0212' ],
            [ 'name' => 'MUHAMAD ALIF FAHMI', 'kelas' => 'X PPLG 3', 'email' => 'muhamadaliffahmi@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0342' ],
            [ 'name' => 'MUHAMAD DAFFA PUTRA PRATAMA', 'kelas' => 'X PPLG 3', 'email' => 'muhamaddaffaputrapratama@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0275' ],
            [ 'name' => 'MUHAMAD FAIQ AZIKRA EFENDI', 'kelas' => 'X PPLG 3', 'email' => 'muhamadfaiqazikraefendi@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0376' ],
            [ 'name' => 'MUHAMAD NABHAN AL HASANI', 'kelas' => 'X PPLG 3', 'email' => 'muhamadnabhanalhasani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0385' ],
            [ 'name' => 'MUHAMMAD ADITYA NURZAENI', 'kelas' => 'X PPLG 3', 'email' => 'muhammadadityanurzaeni@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0113' ],
            [ 'name' => 'MUHAMMAD ALFAN MAULANA', 'kelas' => 'X PPLG 3', 'email' => 'muhammadalfanmaulana@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0353' ],
            [ 'name' => 'MUHAMMAD NAUFAL SYAUQI', 'kelas' => 'X PPLG 3', 'email' => 'muhammadnaufalsyauqi@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0083' ],
            [ 'name' => 'MUHAMMAD RAMDAN', 'kelas' => 'X PPLG 3', 'email' => 'muhammadramdan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0166' ],
            [ 'name' => 'QATRUNNADA NASYWAH RAMDAN', 'kelas' => 'X PPLG 3', 'email' => 'qatrунnadanasywahramdan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0081' ],
            [ 'name' => 'RIZQI FITRAH RAMADHAN', 'kelas' => 'X PPLG 3', 'email' => 'rizqifitrahramadhan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0274' ],
            [ 'name' => 'SAFA KHANSA VALERIE', 'kelas' => 'X PPLG 3', 'email' => 'safakhansavalerie@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0089' ],
            [ 'name' => 'SARIF ARIVIN', 'kelas' => 'X PPLG 3', 'email' => 'sarifarivin@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0317' ],
        ];

        // Looping untuk membuat setiap record User
        foreach ($data as $user) {
            User::create($user);
        }
    }
}