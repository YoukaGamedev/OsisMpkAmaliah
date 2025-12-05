<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XI_MP_3 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data pengguna dari kelas XI MP 3
        $data = [
            [ 'name' => 'ANANDA CHELSEA APRILIA', 'kelas' => 'XI MP 3', 'email' => 'anandachelseaaprilia@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0156' ],
            [ 'name' => 'ANANDA NOER NAZIRA', 'kelas' => 'XI MP 3', 'email' => 'anandanoernazira@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0255' ],
            [ 'name' => 'ASHA HUSNIYAH KAMILA', 'kelas' => 'XI MP 3', 'email' => 'ashahusniyahkamila@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0196' ],
            [ 'name' => 'AWAN JULIAN ALKEANU', 'kelas' => 'XI MP 3', 'email' => 'awanjulianalkeanu@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0082' ],
            [ 'name' => 'CARISA PUTRI RAHMADANI', 'kelas' => 'XI MP 3', 'email' => 'carisaputrirahmadani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0271' ],
            [ 'name' => 'DEANISA SAFIRA', 'kelas' => 'XI MP 3', 'email' => 'deanisasafira@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0257' ],
            [ 'name' => 'DELIA SAFITRI', 'kelas' => 'XI MP 3', 'email' => 'deliasafitri@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0046' ],
            [ 'name' => 'HAYFA TIARA FUTRI K', 'kelas' => 'XI MP 3', 'email' => 'hayfatiarafutrik@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0098' ],
            [ 'name' => 'INDAH BUNGA LESTARI', 'kelas' => 'XI MP 3', 'email' => 'indahbungalestari@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0342' ],
            [ 'name' => 'KANIA PUTRI RAMADAN', 'kelas' => 'XI MP 3', 'email' => 'kaniaputriramadan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0266' ],
            [ 'name' => 'LESTARI SAPITRI', 'kelas' => 'XI MP 3', 'email' => 'lestarisapitri@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0171' ],
            [ 'name' => 'MAULANA HAFIDZ', 'kelas' => 'XI MP 3', 'email' => 'maulanahafidz@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0207' ],
            [ 'name' => 'MUHAMAD FARHAN ZEINJULI', 'kelas' => 'XI MP 3', 'email' => 'muhamadfarhanzeinjuli@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0237' ],
            [ 'name' => 'NADIRA SYAFA FEBRIANI', 'kelas' => 'XI MP 3', 'email' => 'nadirasyafafebriani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0240' ],
            [ 'name' => 'NADYA SABRINA SOFIANTY', 'kelas' => 'XI MP 3', 'email' => 'nadyasabrinasofianty@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0152' ],
            [ 'name' => 'NAURA ADESTIA VIRANDA', 'kelas' => 'XI MP 3', 'email' => 'nauraadestiaviranda@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0190' ],
            [ 'name' => 'NIDA NURHASANAH', 'kelas' => 'XI MP 3', 'email' => 'nidanurhasanah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0121' ],
            [ 'name' => 'NITA HERAWATI', 'kelas' => 'XI MP 3', 'email' => 'nitaherawati@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0381' ],
            [ 'name' => 'NOPI YANTI', 'kelas' => 'XI MP 3', 'email' => 'nopiyanti@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0140' ],
            [ 'name' => 'NOVI AULIA', 'kelas' => 'XI MP 3', 'email' => 'noviaulia@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0056' ],
            [ 'name' => 'RIFKI APRIANSYAH', 'kelas' => 'XI MP 3', 'email' => 'rifkiapriansyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0211' ],
            [ 'name' => 'SALWA NUR AULIA', 'kelas' => 'XI MP 3', 'email' => 'salwanuraulia@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0088' ],
            [ 'name' => 'SANDYA KEYSA ANWAR', 'kelas' => 'XI MP 3', 'email' => 'sandyakeysaanwar@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0120' ],
            [ 'name' => 'SASKIA BUNGA KOMALASARI', 'kelas' => 'XI MP 3', 'email' => 'saskiabungakomalasari@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0189' ],
            [ 'name' => 'SITI SHIPANY SAPITRI', 'kelas' => 'XI MP 3', 'email' => 'sitishipanysapitri@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0358' ],
        ];

        // Looping untuk membuat setiap record User
        foreach ($data as $user) {
            User::create($user);
        }
    }
}