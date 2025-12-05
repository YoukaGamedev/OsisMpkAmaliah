<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class X_PPLG_2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data pengguna dari kelas X PPLG 2 (berdasarkan file Excel/CSV)
        $data = [
            [ 'name' => 'AINUN NISSA', 'kelas' => 'X PPLG 2', 'email' => 'ainunnissa@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0039' ],
            [ 'name' => 'DAFFA AHMAD FIRMAN FAHRAZA', 'kelas' => 'X PPLG 2', 'email' => 'daffaahmadfirmanfahraza@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0286' ],
            [ 'name' => 'EJAEZ ABRIL AKHTAR PURWANTO', 'kelas' => 'X PPLG 2', 'email' => 'ejaezabrilakhtarpurwanto@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0054' ],
            [ 'name' => 'FIRMAN MALIK RAMADAN', 'kelas' => 'X PPLG 2', 'email' => 'firmanmalikramadan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0217' ],
            [ 'name' => 'HAFSHAH NUR RAHMADANIA', 'kelas' => 'X PPLG 2', 'email' => 'hafshahnurrahmadania@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0244' ],
            [ 'name' => 'IJLAL ASSAMI', 'kelas' => 'X PPLG 2', 'email' => 'ijlalassami@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0272' ],
            [ 'name' => 'MIRACLE MUHAMMAD', 'kelas' => 'X PPLG 2', 'email' => 'miraclemuhammad@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0084' ],
            [ 'name' => 'MUHAMAD ADNAN HAMBALI', 'kelas' => 'X PPLG 2', 'email' => 'muhamadadnanhambali@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0027' ],
            [ 'name' => 'MUHAMAD ANDRIAN YUDHISTIRA', 'kelas' => 'X PPLG 2', 'email' => 'muhamadandrianyudhistira@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0035' ],
            [ 'name' => 'MUHAMAD DAFFA NOVIANSYAH', 'kelas' => 'X PPLG 2', 'email' => 'muhamaddaffanoviansyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0345' ],
            [ 'name' => 'MUHAMAD FAHRI AKBAR', 'kelas' => 'X PPLG 2', 'email' => 'muhamadfahriakbar@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0234' ],
            [ 'name' => 'MUHAMAD FAIZ AZIKRA EFENDI', 'kelas' => 'X PPLG 2', 'email' => 'muhamadfaizazikraefendi@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0048' ],
            [ 'name' => 'MUHAMAD ILYAS RIFAI', 'kelas' => 'X PPLG 2', 'email' => 'muhamadilyasrifai@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0177' ],
            [ 'name' => 'MUHAMAD KHALIL FATURRAHMAN', 'kelas' => 'X PPLG 2', 'email' => 'muhamadkhalilfaturrahman@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0077' ],
            [ 'name' => 'MUHAMAD MUQFI ALFARIJI', 'kelas' => 'X PPLG 2', 'email' => 'muhamadmuqfialfariji@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0339' ],
            [ 'name' => 'MUHAMAD RAVA MAULANA', 'kelas' => 'X PPLG 2', 'email' => 'muhamadravamaulana@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0343' ],
            [ 'name' => 'MUHAMMAD ADAM ALIVI', 'kelas' => 'X PPLG 2', 'email' => 'muhammadadamalivi@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0128' ],
            [ 'name' => 'MUHAMMAD DAFFA ABRISAM HARDIANSYAH PUTRA', 'kelas' => 'X PPLG 2', 'email' => 'muhammaddaffaabrisamhardiansyahputra@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0109' ],
            [ 'name' => 'MUHAMMAD HATA HERVANI', 'kelas' => 'X PPLG 2', 'email' => 'muhammadhatahervani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0190' ],
            [ 'name' => 'NADHIF REZKY ALFARAZEL', 'kelas' => 'X PPLG 2', 'email' => 'nadhifrezkyalfarazel@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0160' ],
            [ 'name' => 'RAIHAN SYAHRURAMADHAN', 'kelas' => 'X PPLG 2', 'email' => 'raihansyahruramadhan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0144' ],
            [ 'name' => 'SHATYA IMEYDA', 'kelas' => 'X PPLG 2', 'email' => 'shatyaimeyda@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0247' ],
            [ 'name' => 'SYAHIRA SEPTIA NURISSA', 'kelas' => 'X PPLG 2', 'email' => 'syahiraseptianurissa@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0132' ],
            [ 'name' => 'TB M. RIDHO AL FARIZQY', 'kelas' => 'X PPLG 2', 'email' => 'tbmridhoalfarizqy@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0056' ],
            [ 'name' => 'WIZA BRUCE NURFADILAH ENDOH', 'kelas' => 'X PPLG 2', 'email' => 'wizabrucenurfadilahendoh@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0227' ],
        ];

        // Looping untuk membuat setiap record User
        foreach ($data as $user) {
            User::create($user);
        }
    }
}