<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XII_LPS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data pengguna dari kelas XII LPS
        $data = [
            [ 'name' => 'ALIZA MAULIDA', 'kelas' => 'XII LPS', 'email' => 'alizamaulida@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0194' ],
            [ 'name' => 'ANINDHITA MAHARANI', 'kelas' => 'XII LPS', 'email' => 'anindhitamaharani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0189' ],
            [ 'name' => 'LARAS AMELIA', 'kelas' => 'XII LPS', 'email' => 'larasamelia@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0124' ],
            [ 'name' => 'MEYLANI PUTRI', 'kelas' => 'XII LPS', 'email' => 'meylaniputri@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0045' ],
            [ 'name' => 'MUHAMAD DENIS ARISUBONO', 'kelas' => 'XII LPS', 'email' => 'muhamaddenisarisubono@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0362' ],
            [ 'name' => 'NURALYA TRI HANDAYANI', 'kelas' => 'XII LPS', 'email' => 'nuralyatrihandayani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0307' ],
            [ 'name' => 'SALSABILA BADRIYAH', 'kelas' => 'XII LPS', 'email' => 'salsabilabadriyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0154' ],
            [ 'name' => 'SANNA SYAIRA AMANI', 'kelas' => 'XII LPS', 'email' => 'sannasyairaamani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0344' ],
            [ 'name' => 'SHAFINA ADE ELFARIANI', 'kelas' => 'XII LPS', 'email' => 'shafinaadeelfariani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0367' ],
            [ 'name' => 'SITI APRILIANA', 'kelas' => 'XII LPS', 'email' => 'sitiapriliana@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0234' ],
            [ 'name' => 'SITI ROHMATUL SADIAH', 'kelas' => 'XII LPS', 'email' => 'sitirohmatulsadiah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0015' ],
            [ 'name' => 'TSAUROYA INDIRA RAMAIS', 'kelas' => 'XII LPS', 'email' => 'tsauroyaindiraramais@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0368' ],
            [ 'name' => 'VINA DESTIANA', 'kelas' => 'XII LPS', 'email' => 'vinadestiana@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0320' ],
            [ 'name' => 'VINI DESTIANI', 'kelas' => 'XII LPS', 'email' => 'vinidestiani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0321' ],
            [ 'name' => 'ZULVA HOERIAH', 'kelas' => 'XII LPS', 'email' => 'zulvahoeriah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0900' ],
        ];

        // Looping untuk membuat setiap record User
        foreach ($data as $user) {
            User::create($user);
        }
    }
}