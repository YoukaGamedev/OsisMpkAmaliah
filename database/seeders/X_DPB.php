<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class X_DPB extends Seeder
{
    public function run()
    {
        $data = [
            [ 'nis' => '25.6.0321', 'name' => 'ALIFA KAMELIA PRADHITA', 'kelas' => 'X DPB', 'email' => 'alifakameliaPradhita@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2' ],
            [ 'nis' => '25.6.0236', 'name' => 'BILQIS MEILANI PUTRI', 'kelas' => 'X DPB', 'email' => 'bilqismeilaniputri@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2' ],
            [ 'nis' => '25.6.0137', 'name' => 'CLAUDYA CAREN', 'kelas' => 'X DPB', 'email' => 'claudyacaren@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2' ],
            [ 'nis' => '25.6.0161', 'name' => 'DESI AULIANI APIPAH', 'kelas' => 'X DPB', 'email' => 'desiaulianiapipah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2' ],
            [ 'nis' => '25.6.0093', 'name' => 'FITRIYANI NUR HABIBAH', 'kelas' => 'X DPB', 'email' => 'fitriyaninurhabibah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2' ],
            [ 'nis' => '25.6.0331', 'name' => 'IKLIMA RAMADANI', 'kelas' => 'X DPB', 'email' => 'iklimaramadani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2' ],
            [ 'nis' => '25.6.0204', 'name' => 'JASMINE MAHARANI HENDRICK', 'kelas' => 'X DPB', 'email' => 'jasminemaharanihendrick@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2' ],
            [ 'nis' => '25.6.0269', 'name' => 'KAYLA DZAFFIRA DWI MULYANA', 'kelas' => 'X DPB', 'email' => 'kayladzaffiradwimulyana@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2' ],
            [ 'nis' => '25.6.0055', 'name' => 'RATU ESA AULIA HIDAYAT', 'kelas' => 'X DPB', 'email' => 'ratuesaauliahidayat@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2' ],
            [ 'nis' => '25.6.0383', 'name' => 'RISMAWATI', 'kelas' => 'X DPB', 'email' => 'rismawati@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2' ],
            [ 'nis' => '25.6.0377', 'name' => 'SHAFIRA VELDA PUTRI', 'kelas' => 'X DPB', 'email' => 'shafiraveldaputri@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2' ],
            [ 'nis' => '25.6.0147', 'name' => 'SYAFIRA HUZAIMA', 'kelas' => 'X DPB', 'email' => 'syafirahuzaima@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2' ],
        ];

        foreach ($data as $user) {
            User::create($user);
        }
    }
}
