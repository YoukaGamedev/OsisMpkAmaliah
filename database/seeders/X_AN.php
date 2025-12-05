<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class X_AN extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data pengguna dari kelas X AN (berdasarkan file Excel/CSV)
        $data = [
            [ 'name' => 'ALYSIA MUTIARA HATI', 'kelas' => 'X AN', 'email' => 'alysiamutiarahati@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0276' ],
            [ 'name' => 'ARFIAN DAFA AZHARI', 'kelas' => 'X AN', 'email' => 'arfiandafaazhari@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0229' ],
            [ 'name' => 'AUFITRO AKBAR', 'kelas' => 'X AN', 'email' => 'aufitroakbar@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0314' ],
            [ 'name' => 'AURA PUTRI AYOEDHIA', 'kelas' => 'X AN', 'email' => 'auraputriayoedhia@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0162' ],
            [ 'name' => 'KEISYA HASANAH', 'kelas' => 'X AN', 'email' => 'keisyahasanah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0163' ],
            [ 'name' => 'M. AZHAR AWAL SAPUTRA', 'kelas' => 'X AN', 'email' => 'mazharawalsaputra@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0256' ],
            [ 'name' => 'M. EZHAR MALIKI', 'kelas' => 'X AN', 'email' => 'mezharmaliki@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0017' ],
            [ 'name' => 'MOCHAMAD NAJAH ZULFIKAR MAULAYA', 'kelas' => 'X AN', 'email' => 'mochamadnajahzulfికarmaulaya@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0226' ],
            [ 'name' => 'MUHAMAD FAHMI FAHREZA', 'kelas' => 'X AN', 'email' => 'muhamadfahmifahreza@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0096' ],
            [ 'name' => 'MUHAMAD MAULANA AKBAR', 'kelas' => 'X AN', 'email' => 'muhamadmaulanaakbar@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0020' ],
            [ 'name' => 'MUHAMMAD ALIEF AKBAR', 'kelas' => 'X AN', 'email' => 'muhammadaliefakbar@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0085' ],
            [ 'name' => 'MUHAMMAD BILAL ASSHIDDIQ', 'kelas' => 'X AN', 'email' => 'muhammadبilalasshiddiq@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0022' ],
            [ 'name' => 'NAFIISA INAYAH PUTRI', 'kelas' => 'X AN', 'email' => 'nafiisainayahputri@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0327' ],
            [ 'name' => 'RAHAYU HAWARI', 'kelas' => 'X AN', 'email' => 'rahayuhawari@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0336' ],
            [ 'name' => 'SITI LUBNA NAVIELLAH', 'kelas' => 'X AN', 'email' => 'sitilუbnanaviellah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0149' ],
            [ 'name' => 'SYAFA AYU ALMIRA', 'kelas' => 'X AN', 'email' => 'syafaayualmira@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0126' ],
        ];

        // Looping untuk membuat setiap record User
        foreach ($data as $user) {
            User::create($user);
        }
    }
}