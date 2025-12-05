<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XII_AK_1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data pengguna dari kelas XII AK 1
        $data = [
            [ 'name' => 'AFRA BAIATUN NISADANI', 'kelas' => 'XII AK 1', 'email' => 'afrabaiatunnisadani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '0.9671875' ],
            [ 'name' => 'AHMAD JUNAEDI', 'kelas' => 'XII AK 1', 'email' => 'ahmadjunaedi@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0125' ],
            [ 'name' => 'ARSILA DEA RAHAYU', 'kelas' => 'XII AK 1', 'email' => 'arsiladearahayu@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0058' ],
            [ 'name' => 'DISA AULIA', 'kelas' => 'XII AK 1', 'email' => 'disaaulia@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0221' ],
            [ 'name' => 'FEBY AMELIASARI', 'kelas' => 'XII AK 1', 'email' => 'febyameliasari@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0311' ],
            [ 'name' => 'FIRLLY FEBRIANTI SOFIAN', 'kelas' => 'XII AK 1', 'email' => 'firllyfebriantisofian@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0103' ],
            [ 'name' => 'JIHAN HUMAIRA', 'kelas' => 'XII AK 1', 'email' => 'jihanhumaira@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0017' ],
            [ 'name' => 'KANYA SITI NORRAZZLLY SOBARY', 'kelas' => 'XII AK 1', 'email' => 'kanyasitinorrazzllysobary@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0170' ],
            [ 'name' => 'MUHAMAD RADHIT RAFIKI', 'kelas' => 'XII AK 1', 'email' => 'muhamadradhitrafiki@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0357' ],
            [ 'name' => 'NAILA SHALSABILA', 'kelas' => 'XII AK 1', 'email' => 'nailashalsabila@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0282' ],
            [ 'name' => 'PUTRI CHANDRA WIYANA', 'kelas' => 'XII AK 1', 'email' => 'putrichandrawiyana@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0215' ],
            [ 'name' => 'PUTRI NURMALA', 'kelas' => 'XII AK 1', 'email' => 'putrinurmala@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0228' ],
            [ 'name' => 'RAISYA ALEYDA HAQ', 'kelas' => 'XII AK 1', 'email' => 'raisyaaaleydahaq@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0336' ],
            [ 'name' => 'RAISYA NUR FADILAH', 'kelas' => 'XII AK 1', 'email' => 'raisynurfadilah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0340' ],
            [ 'name' => 'SHEIRA RAMADHANI SANDRIA', 'kelas' => 'XII AK 1', 'email' => 'sheiraramadhanisandria@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0005' ],
            [ 'name' => 'SITI AINA MAULIDA', 'kelas' => 'XII AK 1', 'email' => 'sitiainaamaulida@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0178' ],
            [ 'name' => 'SITI HUMAEROH', 'kelas' => 'XII AK 1', 'email' => 'sitihumaeroh@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0145' ],
            [ 'name' => 'SITI NURKAILA APRILIANI', 'kelas' => 'XII AK 1', 'email' => 'sitinurkailaapriliani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0393' ],
            [ 'name' => 'SYAHIRA', 'kelas' => 'XII AK 1', 'email' => 'syahira@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0341' ],
            [ 'name' => 'ZAKIYYA NURLAELI AHMAD', 'kelas' => 'XII AK 1', 'email' => 'zakiyyanurlaeliahmad@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0301' ],
        ];

        // Looping untuk membuat setiap record User
        foreach ($data as $user) {
            User::create($user);
        }
    }
}