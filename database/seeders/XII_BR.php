<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XII_BR extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data pengguna dari kelas XII BR
        $data = [
            [ 'name' => 'AZKIYA RAMBU BILAWAL', 'kelas' => 'XII BR', 'email' => 'azkiyarambubilawal@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0041' ],
            [ 'name' => 'ERRINA AULIA HIDAYAT', 'kelas' => 'XII BR', 'email' => 'errinaauliahidayat@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0322' ],
            [ 'name' => 'FATWA NATA RAYA', 'kelas' => 'XII BR', 'email' => 'fatwannataraya@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0216' ],
            [ 'name' => 'GEMA FITRI ADIBRATA PUTRA', 'kelas' => 'XII BR', 'email' => 'gemafitriadibrataputra@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0394' ],
            [ 'name' => 'HANITA SHAFRIANI TAZKIA', 'kelas' => 'XII BR', 'email' => 'hanitashafriianitazkia@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0117' ],
            [ 'name' => 'ICA KHAERUNNISA', 'kelas' => 'XII BR', 'email' => 'icakhaerunnisa@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0129' ],
            [ 'name' => 'LINTANG OKTAVIRA DARYATMO', 'kelas' => 'XII BR', 'email' => 'lintangoktaviradaryatmo@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0151' ],
            [ 'name' => 'M NABIL SYARIF', 'kelas' => 'XII BR', 'email' => 'mnabilsyarif@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0353' ],
            [ 'name' => 'M. DAFA FADILLAH', 'kelas' => 'XII BR', 'email' => 'mdafafadillah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0267' ],
            [ 'name' => 'MUHAMAD FAHRI ADITYA MISLAH', 'kelas' => 'XII BR', 'email' => 'muhamadfahriadityamislah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0310' ],
            [ 'name' => 'MUHAMMAD FAUZAN APRILIANI TAUPIQ', 'kelas' => 'XII BR', 'email' => 'muhammadfauzanaprilianitaupiq@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0068' ],
            [ 'name' => 'NURUL IZZATI MAUDIPUTRI', 'kelas' => 'XII BR', 'email' => 'nurulizzatimaudiputri@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0314' ],
            [ 'name' => 'PUTRI KHIRANA HERMAWAN', 'kelas' => 'XII BR', 'email' => 'putrikhiranahermawan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0395' ],
            [ 'name' => 'RIZKY SAPUTRA', 'kelas' => 'XII BR', 'email' => 'rizkysaputra@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0281' ],
            [ 'name' => 'SALMAN AL FARIZI', 'kelas' => 'XII BR', 'email' => 'salmanalfarizi@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0271' ],
            [ 'name' => 'SATYA PRADITA MAHARI', 'kelas' => 'XII BR', 'email' => 'satyapraditamahari@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0289' ],
            [ 'name' => 'SITI RASMI SALPIYAH', 'kelas' => 'XII BR', 'email' => 'sitirasmisalpiyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0352' ],
            [ 'name' => 'SITI VARERA', 'kelas' => 'XII BR', 'email' => 'sitivarera@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0213' ],
            [ 'name' => 'STEVANI LADIA SYAKIRA', 'kelas' => 'XII BR', 'email' => 'stevaniladiasyakira@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0365' ],
            [ 'name' => 'SURYANIH', 'kelas' => 'XII BR', 'email' => 'suryanih@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0091' ],
            [ 'name' => 'ZULFA JAUDAH JAELANI', 'kelas' => 'XII BR', 'email' => 'zulfajaudahjaelani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0349' ],
        ];

        // Looping untuk membuat setiap record User
        foreach ($data as $user) {
            User::create($user);
        }
    }
}