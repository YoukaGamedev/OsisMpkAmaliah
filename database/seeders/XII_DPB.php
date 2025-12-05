<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XII_DPB extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data pengguna dari kelas XII DPB
        $data = [
            [ 'name' => 'ATALLAH ZAKIAH', 'kelas' => 'XII DPB', 'email' => 'atallahzakiah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0109' ],
            [ 'name' => 'CHELSEA AMELIA PUTRI', 'kelas' => 'XII DPB', 'email' => 'chelseaameliaputri@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0400' ],
            [ 'name' => 'FIRDA RIHADATUL AISY', 'kelas' => 'XII DPB', 'email' => 'firdarihadatulaisy@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0369' ],
            [ 'name' => 'KAYLA RIZKY AZAHRA', 'kelas' => 'XII DPB', 'email' => 'kaylarizkyazahra@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0309' ],
            [ 'name' => 'MAHARANI', 'kelas' => 'XII DPB', 'email' => 'maharani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0304' ],
            [ 'name' => 'NADA FAIRUZ', 'kelas' => 'XII DPB', 'email' => 'nadafairuz@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0277' ],
            [ 'name' => 'NADIN SAKILA ZULKUP', 'kelas' => 'XII DPB', 'email' => 'nadinsakilazulkup@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0032' ],
            [ 'name' => 'NAZWA MAULIDA', 'kelas' => 'XII DPB', 'email' => 'nazwamaulida@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0251' ],
            [ 'name' => 'NURUL AENI', 'kelas' => 'XII DPB', 'email' => 'nurulaeni@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0243' ],
            [ 'name' => 'SANDI RHAMADAN', 'kelas' => 'XII DPB', 'email' => 'sandirhamadan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0111' ],
            [ 'name' => 'SITI ASIAH', 'kelas' => 'XII DPB', 'email' => 'sitiasiah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0401' ],
            [ 'name' => 'SITI NASEHA', 'kelas' => 'XII DPB', 'email' => 'sitinaseha@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0049' ],
            [ 'name' => 'SITI RURI MARTIANI', 'kelas' => 'XII DPB', 'email' => 'sitirrurimartiani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0285' ],
            [ 'name' => 'SITI ZAIRA NOOR AZIZA', 'kelas' => 'XII DPB', 'email' => 'sitizairanooraziza@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0064' ],
            [ 'name' => 'TIARA KANIAZAHRA', 'kelas' => 'XII DPB', 'email' => 'tiarakaniazahra@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0370' ],
            [ 'name' => 'ZAHARA AYU KENANGA NUR CAHYA', 'kelas' => 'XII DPB', 'email' => 'zaharaayukenanganurchahya@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0007' ],
            [ 'name' => 'ZAHRA MAULIDYA', 'kelas' => 'XII DPB', 'email' => 'zahramaulidya@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0295' ],
        ];

        // Looping untuk membuat setiap record User
        foreach ($data as $user) {
            User::create($user);
        }
    }
}