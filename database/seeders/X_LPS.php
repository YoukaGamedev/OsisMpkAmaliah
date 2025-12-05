<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class X_LPS extends Seeder
{
    public function run()
    {
        $data = [

            ['nis' => '25.6.0312', 'nama' => 'ALMIRA'],
            ['nis' => '25.6.0245', 'nama' => 'ALMIRA RATU LORENZA'],
            ['nis' => '25.6.0205', 'nama' => 'ANGELLITA RAMADANI SEPTIA'],
            ['nis' => '25.6.0251', 'nama' => 'ARINI BIDRIYA CHUSNIA'],
            ['nis' => '25.6.0079', 'nama' => 'CAHYA NINDY RANAYA'],
            ['nis' => '25.6.0115', 'nama' => 'CARISSA'],
            ['nis' => '25.6.0281', 'nama' => 'DARA JENNY OCKTAVIANY'],
            ['nis' => '25.6.0221', 'nama' => 'EKA HIJRIANA PUTRI'],
            ['nis' => '25.6.0260', 'nama' => 'KANIA SABILA PUTRI SETIAWAN'],
            ['nis' => '25.6.0133', 'nama' => 'KHUSNUL SYAFANA'],
            ['nis' => '25.6.0232', 'nama' => 'KIRANA AISYAFA PRATIWI'],
            ['nis' => '25.6.0309', 'nama' => 'LIA ROSIYANDINI'],
            ['nis' => '25.6.0303', 'nama' => 'MUHAMAD IQBAL KARYANI'],
            ['nis' => '25.6.0220', 'nama' => 'MUHAMAD RANDI RAMANA'],
            ['nis' => '25.6.0298', 'nama' => 'MUHAMAD SYEKHAN RIZKI AL FARIZ'],
            ['nis' => '25.6.0218', 'nama' => 'MUHAMMAD FACHRI ROHMATULLAH'],
            ['nis' => '25.6.0301', 'nama' => 'MUHAMMAD FAREL VAN RAALTEN'],
            ['nis' => '25.6.0159', 'nama' => 'NABILA PUTRI AMIRUL'],
            ['nis' => '25.6.0186', 'nama' => 'NADIA NUR RAMADHANI'],
            ['nis' => '25.6.0187', 'nama' => 'NADILA NUR RAMADHANI'],
            ['nis' => '25.6.0169', 'nama' => 'NAZWA MEYSA PUTRI'],
            ['nis' => '25.6.0302', 'nama' => 'RISA MAULIDA'],
            ['nis' => '25.6.0253', 'nama' => 'SAKINAH'],
            ['nis' => '25.6.0300', 'nama' => 'SITI JULPA ZAKIAH'],
            ['nis' => '25.6.0305', 'nama' => 'SITI NURIN MAHARANI'],

        ];

        foreach ($data as $item) {

            $email = strtolower(str_replace(' ', '', $item['nama'])) . '@gmail.com';

            DB::table('users')->insert([
                'nis' => $item['nis'],
                'name' => $item['nama'],
                'email' => $email,
                'password' => Hash::make('123456789'),
                'role' => 'user',
                'sekolah' => 'A2',
                'kelas' => 'X LPS',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
