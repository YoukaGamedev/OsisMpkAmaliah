<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class X_MP_3 extends Seeder
{
    public function run()
    {
        $data = [

            ['nis' => '25.6.0184', 'nama' => 'AL-ZIKRA NUR FADILLAH'],
            ['nis' => '25.6.0129', 'nama' => 'ALISA NUR AZIZAH'],
            ['nis' => '25.6.0332', 'nama' => 'ASHIFA IRAWAN'],
            ['nis' => '25.6.0175', 'nama' => 'AURELIA AZAHRA'],
            ['nis' => '25.6.0292', 'nama' => 'DINDA PRICILLA DARMAWAN'],
            ['nis' => '25.6.0157', 'nama' => 'DWI WAHYUNI'],
            ['nis' => '25.6.0208', 'nama' => 'FAZRIL PARDIANSYAH'],
            ['nis' => '25.6.0167', 'nama' => 'HENI JULIANTI'],
            ['nis' => '25.6.0036', 'nama' => 'ISMIRA TRYANA'],
            ['nis' => '25.6.0252', 'nama' => 'JIHAN NISRINA'],
            ['nis' => '25.6.0324', 'nama' => 'KHALIFA KHAERUN NISSA'],
            ['nis' => '25.6.0002', 'nama' => 'KHANSA THUFAILAH ALTHAFUNISSA'],
            ['nis' => '25.6.0013', 'nama' => 'MILA SEPTIANTI'],
            ['nis' => '25.6.0032', 'nama' => 'MUHAMAD TRI RAMADHANI'],
            ['nis' => '25.6.0164', 'nama' => 'NAIRHA KURNIASHIFA WIJAYA'],
            ['nis' => '25.6.0382', 'nama' => 'NESA MAULIDA'],
            ['nis' => '25.6.0069', 'nama' => 'NINA NURHAYATI'],
            ['nis' => '25.6.0100', 'nama' => 'NUR ISTIQOMAH'],
            ['nis' => '25.6.0046', 'nama' => 'SASYA ZULAIKHA JIRZIS'],
            ['nis' => '25.6.0008', 'nama' => 'SITI ADINDA HUSIFA AISAH'],
            ['nis' => '25.6.0178', 'nama' => 'SITI RAHMA ALUNIANSYAH'],
            ['nis' => '25.6.0043', 'nama' => 'SITI ZASKYATUL HUSNA'],
            ['nis' => '25.6.0255', 'nama' => 'YOLA OCTARIA'],

        ];

        foreach ($data as $item) {

            // email tanpa spasi, huruf kecil
            $email = strtolower(str_replace(' ', '', $item['nama'])) . '@gmail.com';

            DB::table('users')->insert([
                'nis' => $item['nis'],
                'name' => $item['nama'],
                'email' => $email,
                'password' => Hash::make('123456789'),
                'role' => 'user',
                'sekolah' => 'A2',
                'kelas' => 'X MP 3',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
