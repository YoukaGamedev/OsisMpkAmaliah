<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class X_MP_2 extends Seeder
{
    public function run()
    {
        $data = [

            ['nis' => '25.6.0005', 'nama' => 'ADILA RISTI'],
            ['nis' => '25.6.0108', 'nama' => 'ALIKA MAYSHA PUTRI'],
            ['nis' => '25.6.0094', 'nama' => 'ALYA AINA TASYA AFRIANTI'],
            ['nis' => '25.6.0230', 'nama' => 'DELIA SEPTYA CAHYA'],
            ['nis' => '25.6.0250', 'nama' => 'EKA MUTIARA WAFIRAH'],
            ['nis' => '25.6.0318', 'nama' => 'FIRYA BALQIS FAKHIRA'],
            ['nis' => '25.6.0106', 'nama' => 'KEISHA ANINDYA'],
            ['nis' => '25.6.0330', 'nama' => 'KEYLA NADZIMATUSI SYAHLA'],
            ['nis' => '25.6.0287', 'nama' => 'KHOERUNNISA RAMADANI'],
            ['nis' => '25.6.0165', 'nama' => 'LOVRINA REZTY SACHIO'],
            ['nis' => '25.6.0140', 'nama' => 'LUSIYANA SAVIRA'],
            ['nis' => '25.6.0047', 'nama' => 'MECCA MAHARIZA'],
            ['nis' => '25.6.0104', 'nama' => 'MULYA RAMADHAN'],
            ['nis' => '25.6.0007', 'nama' => 'MUNADIL'],
            ['nis' => '25.6.0116', 'nama' => 'NASYWA KHOIRUNISA'],
            ['nis' => '25.6.0258', 'nama' => 'NESYA EKA BAHARI'],
            ['nis' => '25.6.0102', 'nama' => 'QEYLA JULIANIS'],
            ['nis' => '25.6.0154', 'nama' => 'RAISYA NAISILA AZMI'],
            ['nis' => '25.6.0145', 'nama' => 'RIDA SASKYA'],
            ['nis' => '25.6.0338', 'nama' => 'SILVIA NUR KHAIRUNNISA'],
            ['nis' => '25.6.0018', 'nama' => 'SITI NUR ANNISA'],
            ['nis' => '25.6.0216', 'nama' => 'SITI SARAH SORAYA'],
            ['nis' => '25.6.0029', 'nama' => 'THALA NURUL NAZMI'],
            ['nis' => '25.6.0340', 'nama' => 'TIARA CIKA DESTIA'],
            ['nis' => '25.6.0012', 'nama' => 'WITRI'],
            ['nis' => '25.6.0268', 'nama' => 'ZAHRA NASHIFA'],

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
                'kelas' => 'X MP 2',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
