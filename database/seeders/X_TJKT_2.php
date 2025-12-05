<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class X_TJKT_2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data pengguna dari kelas X TJKT 2 (berdasarkan file Excel/CSV)
        $data = [
            [ 'name' => 'ABDUL QUDUS MUHAMMAD', 'kelas' => 'X TJKT 2', 'email' => 'abdulqudusmuhammad@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0325' ],
            [ 'name' => 'ACHMAD FACHRIE', 'kelas' => 'X TJKT 2', 'email' => 'achmadfachrie@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0192' ],
            [ 'name' => 'AHMAD MUHAJIR', 'kelas' => 'X TJKT 2', 'email' => 'ahmadmuhajir@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0082' ],
            [ 'name' => 'AHMAD REZA ALGHIFARI', 'kelas' => 'X TJKT 2', 'email' => 'ahmadrezaalghifari@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0074' ],
            [ 'name' => 'ANDIKA PUTRA PRATAMA', 'kelas' => 'X TJKT 2', 'email' => 'andikaputrapratama@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0111' ],
            [ 'name' => 'ARLY PRAJA SETIAWAN', 'kelas' => 'X TJKT 2', 'email' => 'arlyprajasetiawan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0228' ],
            [ 'name' => 'ARYADI ANDRIAN SYAH', 'kelas' => 'X TJKT 2', 'email' => 'aryadiandriansyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.6.0105' ],
            [ 'name' => 'BAGUS DWI PRATAMA', 'kelas' => 'X TJKT 2', 'email' => 'bagusdwipratama@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0194' ],
            [ 'name' => 'DIMAS WAHYU SURYA PERMANA', 'kelas' => 'X TJKT 2', 'email' => 'dimaswahyusuryapermana@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0263' ],
            [ 'name' => 'FAJAR RIZQY ABDILLAH', 'kelas' => 'X TJKT 2', 'email' => 'fajarrizqyabdillah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0174' ],
            [ 'name' => 'GHOZI ARKANA RAMADHAN', 'kelas' => 'X TJKT 2', 'email' => 'ghoziarkanaramadhan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0179' ],
            [ 'name' => 'KEVIN AKBAR AL-FARIZ', 'kelas' => 'X TJKT 2', 'email' => 'kevinakbaralfariz@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0289' ],
            [ 'name' => 'M. NAYIF SAEFUL ANWAR', 'kelas' => 'X TJKT 2', 'email' => 'mnayifsaefulanwar@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0009' ],
            [ 'name' => 'M. RAFFA FATHUR ROHMAN', 'kelas' => 'X TJKT 2', 'email' => 'mraffاfathurrohman@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0023' ],
            [ 'name' => 'MOCHAMAD REZVAN ABIDIN', 'kelas' => 'X TJKT 2', 'email' => 'mochamadrezvanabidin@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0103' ],
            [ 'name' => 'MUAMAR RHAFI AKBAR WITCAKSANA', 'kelas' => 'X TJKT 2', 'email' => 'muamarrhafiakbarwitcaksana@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0267' ],
            [ 'name' => 'MUHAMAD FADHLI ARRAFI', 'kelas' => 'X TJKT 2', 'email' => 'muhamadfadhliarrafi@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0049' ],
            [ 'name' => 'MUHAMAD FADHLY DZIKRIAWAN', 'kelas' => 'X TJKT 2', 'email' => 'muhamadfadhlydzikriawan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0110' ],
            [ 'name' => 'MUHAMAD MAULANA AZRIEL', 'kelas' => 'X TJKT 2', 'email' => 'muhamadmaulanaazriel@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0333' ],
            [ 'name' => 'MUHAMAD REZA ADRIYANSAH', 'kelas' => 'X TJKT 2', 'email' => 'muhamadrezაadriyansah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0158' ],
            [ 'name' => 'MUHAMAD RIFKI ARDIANSYAH', 'kelas' => 'X TJKT 2', 'email' => 'muhamadrifkiardiansyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0210' ],
            [ 'name' => 'MUHAMAD RIZQI FIRDAUS', 'kelas' => 'X TJKT 2', 'email' => 'muhamadrizqifirdaus@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0051' ],
            [ 'name' => 'MUHAMMAD FAJRI PERMANA', 'kelas' => 'X TJKT 2', 'email' => 'muhammadfajripermana@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0219' ],
            [ 'name' => 'MUHAMMAD FATHIR AWALUDIN', 'kelas' => 'X TJKT 2', 'email' => 'muhammadfathirawaludin@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0040' ],
            [ 'name' => 'MUHAMMAD IMAN SETIAWAN', 'kelas' => 'X TJKT 2', 'email' => 'muhammadიmansetiawan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0378' ],
            [ 'name' => 'MUHAMMAD KAHFI ADLANI', 'kelas' => 'X TJKT 2', 'email' => 'muhammadkahfiadlani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0248' ],
            [ 'name' => 'MUHAMMAD QURTUBI ASSIDDIQ SIREGAR', 'kelas' => 'X TJKT 2', 'email' => 'muhammadqurtubiassiddiqsiregar@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0200' ],
            [ 'name' => 'MUHAMMAD RASHA IBRAHIM', 'kelas' => 'X TJKT 2', 'email' => 'muhammadrashaibrahim@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0063' ],
            [ 'name' => 'MUHAMMAD RIZKY RAMADHAN', 'kelas' => 'X TJKT 2', 'email' => 'muhammadrizkyramadhan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0045' ],
            [ 'name' => 'MUHAMMAD ZIKRA RAMDANI', 'kelas' => 'X TJKT 2', 'email' => 'muhammadzikraramdani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0351' ],
            [ 'name' => 'NOOR BESTINO SURAYUDHA', 'kelas' => 'X TJKT 2', 'email' => 'noorbestinosurayudha@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0277' ],
            [ 'name' => 'RAFKA PRAYUDA', 'kelas' => 'X TJKT 2', 'email' => 'rafkaprayuda@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0066' ],
            [ 'name' => 'RIPALDI ARDIANSAH', 'kelas' => 'X TJKT 2', 'email' => 'ripaldiardiansah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0176' ],
            [ 'name' => 'TSABIT REZKY IFIWANSYAH', 'kelas' => 'X TJKT 2', 'email' => 'tsabitrezkyifiwansyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0282' ],
            [ 'name' => 'ZESTA ARYADINATA', 'kelas' => 'X TJKT 2', 'email' => 'zestaaryadinata@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0033' ],
        ];

        // Looping untuk membuat setiap record User
        foreach ($data as $user) {
            User::create($user);
        }
    }
}