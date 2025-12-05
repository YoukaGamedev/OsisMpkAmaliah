<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XI_PPLG_2 extends Seeder
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
            [ 'name' => 'ADI PRAMBUDI HIDAYAT', 'kelas' => 'XI PPLG 2', 'email' => 'adiprambudihidayat@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0169' ],
            [ 'name' => 'AKBAR ILHAM RAMADAN', 'kelas' => 'XI PPLG 2', 'email' => 'akbarilhamramadan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0137' ],
            [ 'name' => 'ALI ATTAZIRI NURISMAN', 'kelas' => 'XI PPLG 2', 'email' => 'aliattazirinurisman@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0403' ],
            [ 'name' => 'ANANDA REZKY JUNIOR', 'kelas' => 'XI PPLG 2', 'email' => 'anandarezkyjunior@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0262' ],
            [ 'name' => 'ANDINI NURHAYATI', 'kelas' => 'XI PPLG 2', 'email' => 'andininurhayati@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0327' ],
            [ 'name' => 'CELYA VANNISA PUTRI', 'kelas' => 'XI PPLG 2', 'email' => 'celyavannisaputri@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0012' ],
            [ 'name' => 'FILO CAESARIO FARRAS', 'kelas' => 'XI PPLG 2', 'email' => 'filocaesariofarras@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0157' ],
            [ 'name' => 'GERRY APRIANSYAH', 'kelas' => 'XI PPLG 2', 'email' => 'gerryapriansyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0044' ],
            [ 'name' => 'HAIFA NAWAL AZKA', 'kelas' => 'XI PPLG 2', 'email' => 'haifanawalazka@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0249' ],
            [ 'name' => 'HARUM ERILIA SUHANDI', 'kelas' => 'XI PPLG 2', 'email' => 'harumeriliasuhandi@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0104' ],
            [ 'name' => 'KANAYA YUSTIA RUDIANTO', 'kelas' => 'XI PPLG 2', 'email' => 'kanayayustiarudianto@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0013' ],
            [ 'name' => 'KHAERYL HIDAYATULLOH', 'kelas' => 'XI PPLG 2', 'email' => 'khaerylhidayatulloh@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0213' ],
            [ 'name' => 'M. AQILLA KESUMA', 'kelas' => 'XI PPLG 2', 'email' => 'maqillakesuma@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0246' ],
            [ 'name' => 'MAGHFI GIFFARI ALDZANI', 'kelas' => 'XI PPLG 2', 'email' => 'maghfigiffarialdzani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0022' ],
            [ 'name' => 'MOCH HARLAN PADILAH', 'kelas' => 'XI PPLG 2', 'email' => 'mochharlanpadilah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0223' ],
            [ 'name' => 'MOHAMAD KHOERUL FAHRI', 'kelas' => 'XI PPLG 2', 'email' => 'mohamadkhoerulfahri@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0375' ],
            [ 'name' => 'MUHADZADZIB RAJA NUSANTARA', 'kelas' => 'XI PPLG 2', 'email' => 'muhadzadzibrajanusantara@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0393' ],
            [ 'name' => 'MUHAMAD ADITYANSYAH', 'kelas' => 'XI PPLG 2', 'email' => 'muhamadadityansyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0008' ],
            [ 'name' => 'MUHAMAD FAHREZI AL ZIKRIE', 'kelas' => 'XI PPLG 2', 'email' => 'muhamadfahrezialzikrie@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0195' ],
            [ 'name' => 'MUHAMAD RIFA FAUZAN', 'kelas' => 'XI PPLG 2', 'email' => 'muhamadrifafauzan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0349' ],
            [ 'name' => 'MUHAMAD RIZKY SETIAWAN', 'kelas' => 'XI PPLG 2', 'email' => 'muhamadrizkysetiawan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0155' ],
            [ 'name' => 'MUHAMAD ZINDAN', 'kelas' => 'XI PPLG 2', 'email' => 'muhamadzindan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0042' ],
            [ 'name' => 'MUHAMMAD FATHIR CHAIRIL', 'kelas' => 'XI PPLG 2', 'email' => 'muhammadfathirchairil@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0198' ],
            [ 'name' => 'PAJAR RAMDANI', 'kelas' => 'XI PPLG 2', 'email' => 'pajarramdani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0050' ],
            [ 'name' => 'RATU RIZT CALTON KALENDARA', 'kelas' => 'XI PPLG 2', 'email' => 'raturiztcaltonkalendara@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0253' ],
            [ 'name' => 'REVANDRA LANGIT RAMADHAN', 'kelas' => 'XI PPLG 2', 'email' => 'revandralangitramadhan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0336' ],
            [ 'name' => 'RIFKI MAULANA', 'kelas' => 'XI PPLG 2', 'email' => 'rifkimaulana@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0181' ],
            [ 'name' => 'RIZAL FAUZAN ABDULLAH', 'kelas' => 'XI PPLG 2', 'email' => 'rizalfauzanabdullah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0007' ],
            [ 'name' => 'SABRINA MUTIA AGUSTINA', 'kelas' => 'XI PPLG 2', 'email' => 'sabrinamutiaagustina@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0389' ],
            [ 'name' => 'SERENA MEILANI PUTRI', 'kelas' => 'XI PPLG 2', 'email' => 'serenameilaniputri@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0357' ],
            [ 'name' => 'TEGAR REVALDI AKBAR', 'kelas' => 'XI PPLG 2', 'email' => 'tegarrevaldiakbar@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0093' ],
            [ 'name' => 'TIO MAULANA HIDAYATULLAH', 'kelas' => 'XI PPLG 2', 'email' => 'tiomaulanahidayatullah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0417' ],
            [ 'name' => 'VIZRAN RAMADHAN', 'kelas' => 'XI PPLG 2', 'email' => 'vizranramadhan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0188' ],
            [ 'name' => 'YANWAR HAKIM', 'kelas' => 'XI PPLG 2', 'email' => 'yanwarhakim@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0234' ],
        ];


        // Looping untuk membuat setiap record User
        foreach ($data as $user) {
            User::create($user);
        }
    }
}