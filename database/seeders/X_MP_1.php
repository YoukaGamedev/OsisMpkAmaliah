<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class X_MP_1 extends Seeder
{
    public function run()
    {
        $data = [

            ['nis' => '25.6.0188', 'nama' => 'ADELYA RAHMAWATI'],
            ['nis' => '25.6.0278', 'nama' => 'ALIA NUR RAMADHANI'],
            ['nis' => '25.6.0148', 'nama' => 'ALIYA SRI RAHAYU'],
            ['nis' => '25.6.0030', 'nama' => 'ANISA PUTRI PRATIWI'],
            ['nis' => '25.6.0171', 'nama' => 'ANISYA NUR APRIYANTI'],
            ['nis' => '25.6.0095', 'nama' => 'AULYA LOVELY AGUSTIANI'],
            ['nis' => '25.6.0211', 'nama' => 'DEA SHINTA KIRANA'],
            ['nis' => '25.6.0185', 'nama' => 'DINI MUNAZAH'],
            ['nis' => '25.6.0019', 'nama' => 'FATEEMA NAILA PUTRI LAKSANA'],
            ['nis' => '25.6.0062', 'nama' => 'FIRA NUR AULIA'],
            ['nis' => '25.6.0060', 'nama' => 'HANIAH'],
            ['nis' => '25.6.0010', 'nama' => 'INDY RAHMAWATI'],
            ['nis' => '25.6.0203', 'nama' => 'JIHAN NOVELIA PUTRI'],
            ['nis' => '25.6.0231', 'nama' => 'LITA AYU'],
            ['nis' => '25.6.0059', 'nama' => 'MAULIDA SYAKIRA NI\'MAH'],
            ['nis' => '25.6.0326', 'nama' => 'MOCHAMMAD ARIEF FAJAR CAHYA LAKSANA'],
            ['nis' => '25.6.0254', 'nama' => 'MUFTI RAMADHAN'],
            ['nis' => '25.6.0233', 'nama' => 'MUHAMAD ANANDA ADITYA'],
            ['nis' => '25.6.0358', 'nama' => 'MYIESHA NAFEEZA AYU'],
            ['nis' => '25.6.0101', 'nama' => 'NAILA AFRIANTI'],
            ['nis' => '25.6.0065', 'nama' => 'NESSA AZZAHRA'],
            ['nis' => '25.6.0214', 'nama' => 'NINDYANOVA KHOIRUNNISA'],
            ['nis' => '25.6.0224', 'nama' => 'RAHMA AGUSTIANA'],
            ['nis' => '25.6.0146', 'nama' => 'RATU SYAHLA FAKHIRAH'],
            ['nis' => '25.6.0119', 'nama' => 'SALWA SHABIHAH'],
            ['nis' => '25.6.0064', 'nama' => 'SEPTIA SWANDANI PRASTIWI'],
            ['nis' => '25.6.0031', 'nama' => 'SILVA KHAIRUNNISA'],
            ['nis' => '25.6.0279', 'nama' => 'SITI LAILA ALZANIRA'],
            ['nis' => '25.6.0246', 'nama' => 'SITI NURAINI FAUZIYAH'],
            ['nis' => '25.6.0350', 'nama' => 'SORAYA PUTRI ARDIANSYAH'],
            ['nis' => '25.6.0172', 'nama' => 'ZAHRA HAERUNISA'],

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
                'kelas' => 'X MP 1',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
