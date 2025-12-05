<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class X_BR extends Seeder
{
    public function run()
    {
        $data = [

            ['nis' => '25.6.0198', 'nama' => 'ALMIRA KIRAINA'],
            ['nis' => '25.6.0058', 'nama' => 'ALYA RAMADANTI'],
            ['nis' => '25.6.0131', 'nama' => 'ANANDA ASKA MAULANA'],
            ['nis' => '25.6.0311', 'nama' => 'AREEJ RAMBU DILARA'],
            ['nis' => '25.6.0304', 'nama' => 'BAYU EBAS JUMAY'],
            ['nis' => '25.6.0114', 'nama' => 'CINDY REGINA PUTRI'],
            ['nis' => '25.6.0183', 'nama' => 'JELITA KHAIRUNISA MAHARRANIE'],
            ['nis' => '25.6.0308', 'nama' => 'JESSICA KHOLIFATUL REZEKI'],
            ['nis' => '25.6.0315', 'nama' => 'LALITYA PARAMARTA'],
            ['nis' => '25.6.0189', 'nama' => 'MARSYA AULIA PUTRY'],
            ['nis' => '25.6.0285', 'nama' => 'MISKA FIDA AYU UTAMI'],
            ['nis' => '25.6.0372', 'nama' => 'MUHAMAD AKBAR RAMADAN'],
            ['nis' => '25.6.0135', 'nama' => 'MUHAMAD RIKI MAULANA'],
            ['nis' => '25.6.0374', 'nama' => 'MUHAMMAD FAHRIEL FAHRUDDIN'],
            ['nis' => '25.6.0257', 'nama' => 'MUHAMMAD NAUFAL FADILLAH'],
            ['nis' => '25.6.0068', 'nama' => 'MUHAMMAD ROFAQNA'],
            ['nis' => '25.6.0360', 'nama' => 'NASHILA NURUL ITSNAINI'],
            ['nis' => '25.6.0021', 'nama' => 'PAJAR APRIANSYAH'],
            ['nis' => '25.6.0225', 'nama' => 'RATU REGITA ANDRIANA'],
            ['nis' => '25.6.0076', 'nama' => 'REGINA REISHA PUTRI'],
            ['nis' => '25.6.0307', 'nama' => 'RETNO AYU ULANDARI'],
            ['nis' => '25.6.0061', 'nama' => 'REYHAN RIZKY ABDULLAH'],
            ['nis' => '25.6.0199', 'nama' => 'RIZKI ADITDIA'],
            ['nis' => '25.6.0297', 'nama' => 'SACHA OSHEANA'],
            ['nis' => '25.6.0057', 'nama' => 'SALMAN FAHRIZI'],
            ['nis' => '25.6.0370', 'nama' => 'SELA PEBRIYANTI'],
            ['nis' => '25.6.0123', 'nama' => 'SITI JULAEHA'],
            ['nis' => '25.6.0118', 'nama' => 'SITI SALMA'],
            ['nis' => '25.6.0306', 'nama' => 'ZAHRA TUSSIFA'],

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
                'kelas' => 'X BR',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
