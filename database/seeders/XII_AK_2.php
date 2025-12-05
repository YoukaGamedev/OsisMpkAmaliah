<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XII_AK_2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data pengguna dari kelas XII AK 2
        $data = [
            [ 'name' => 'AMARA SENJANA AGUSTIA', 'kelas' => 'XII AK 2', 'email' => 'amarasenjanaagustia@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0328' ],
            [ 'name' => 'ANGELINA RUSLI', 'kelas' => 'XII AK 2', 'email' => 'angelinarusli@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0351' ],
            [ 'name' => 'ESTEFANI DA COSTA', 'kelas' => 'XII AK 2', 'email' => 'estefanidacosta@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0355' ],
            [ 'name' => 'FARIZ RUSTAM', 'kelas' => 'XII AK 2', 'email' => 'farizrustam@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0162' ],
            [ 'name' => 'INDRA BAYU WANA PUTRA', 'kelas' => 'XII AK 2', 'email' => 'indrabayuwanaputra@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0038' ],
            [ 'name' => 'JAUFA LAILA', 'kelas' => 'XII AK 2', 'email' => 'jaufalaila@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0391' ],
            [ 'name' => 'KHAIRA YASQI', 'kelas' => 'XII AK 2', 'email' => 'khairayasqi@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0070' ],
            [ 'name' => 'MEGAWATI', 'kelas' => 'XII AK 2', 'email' => 'megawati@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0184' ],
            [ 'name' => 'NASHIRA AMALIA', 'kelas' => 'XII AK 2', 'email' => 'nashiraamalia@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0199' ],
            [ 'name' => 'NASHWA MAULIDYA NUR HIKMAH', 'kelas' => 'XII AK 2', 'email' => 'nashwamaulidyanurhikmah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0299' ],
            [ 'name' => 'NORIS NUR AQSO', 'kelas' => 'XII AK 2', 'email' => 'norisnuraqso@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0280' ],
            [ 'name' => 'PIRA APRIYANI', 'kelas' => 'XII AK 2', 'email' => 'piraapriyani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0329' ],
            [ 'name' => 'PUTRI NURUL AINI', 'kelas' => 'XII AK 2', 'email' => 'putrinurulaini@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0214' ],
            [ 'name' => 'PUTRI SALMA AZZAHRA', 'kelas' => 'XII AK 2', 'email' => 'putrisalmaazzahra@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0343' ],
            [ 'name' => 'RESYA ANDINI AFIANY', 'kelas' => 'XII AK 2', 'email' => 'resyaandiniafiany@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0148' ],
            [ 'name' => 'RIZKI FADILAH', 'kelas' => 'XII AK 2', 'email' => 'rizkifadilah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0133' ],
            [ 'name' => 'SITI CAHAYA KIRANI', 'kelas' => 'XII AK 2', 'email' => 'siticahayakirani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0254' ],
            [ 'name' => 'SITI FADILAH BAETUL HASANAH', 'kelas' => 'XII AK 2', 'email' => 'sitifadilahbaetulhasanah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0040' ],
            [ 'name' => 'SITI PALICA ANANDA', 'kelas' => 'XII AK 2', 'email' => 'sitipalicaananda@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0179' ],
            [ 'name' => 'SITI ZAHIRA RAUDLATUL JANNAH', 'kelas' => 'XII AK 2', 'email' => 'sitizahiraraudlatuljannah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0141' ],
        ];

        // Looping untuk membuat setiap record User
        foreach ($data as $user) {
            User::create($user);
        }
    }
}