<?php


namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class XI_AK extends Seeder
{
    public function run()
    {
        $data = [

            ['nis' => '24.6.0079', 'nama' => 'ADELIO RUNAKO TYAGA ERYANTO'],
            ['nis' => '24.6.0108', 'nama' => 'ALYA SEPTIRA'],
            ['nis' => '24.6.0317', 'nama' => 'ANISA RIZKY BAROKAH'],
            ['nis' => '24.6.0070', 'nama' => 'ARSA CALLISTA INDIARSARI'],
            ['nis' => '24.6.0109', 'nama' => 'ASHAROTUL FATIMAH'],
            ['nis' => '24.6.0011', 'nama' => 'ASHILAH FITRI FADIYAH HANDRIYANDI'],
            ['nis' => '24.6.0345', 'nama' => 'BUNGA APRILIA CAHYANI'],
            ['nis' => '24.6.0374', 'nama' => 'BUTSAINAH ASHILAH HERNAWATI'],
            ['nis' => '24.6.0322', 'nama' => 'CUT SILVIA KIRANI'],
            ['nis' => '24.6.0143', 'nama' => 'DYANA LUTFIAH LESTARI'],
            ['nis' => '24.6.0386', 'nama' => 'EKA NOVITASARI VIANATA'],
            ['nis' => '24.6.0065', 'nama' => 'GHEA ANDINI PUTRI'],
            ['nis' => '24.6.0062', 'nama' => 'LAILA RAMADHANI LUBIS'],
            ['nis' => '24.6.0060', 'nama' => 'LIRA MARIANI'],
            ['nis' => '24.6.0312', 'nama' => 'MEILANDRI'],
            ['nis' => '24.6.0385', 'nama' => 'MELANIE KARINA EFFENDI'],
            ['nis' => '24.6.0378', 'nama' => 'MUHAMAD BIAZ PUTRA AL AZZRA'],
            ['nis' => '24.6.0359', 'nama' => 'MUHAMMAD RAFLI WIDIANTO'],
            ['nis' => '24.6.0289', 'nama' => 'NABILLA AURA MEDINA'],
            ['nis' => '24.6.0197', 'nama' => 'NADILA RISTIANA'],
            ['nis' => '24.6.0283', 'nama' => 'NAYLLA PRATAMA PAHMI'],
            ['nis' => '24.6.0325', 'nama' => 'NAZWA PUTRI MIRANDA'],
            ['nis' => '24.6.0243', 'nama' => 'NIKITA RAMADANI'],
            ['nis' => '24.6.0405', 'nama' => 'NILA APRIYATI'],
            ['nis' => '24.6.0090', 'nama' => 'RAISA MARYASARI'],
            ['nis' => '24.6.0305', 'nama' => 'RATU SHAFA ZASQIA'],
            ['nis' => '24.6.0288', 'nama' => 'RISMA RISTIANI PRATAMA'],
            ['nis' => '24.6.0362', 'nama' => 'RIZKA NURZAHRA INDIRA'],
            ['nis' => '24.6.0364', 'nama' => 'SITI NUR AZIZAH PERTIWI'],
            ['nis' => '24.6.0018', 'nama' => 'SITI SILVANA'],
            ['nis' => '24.6.0406', 'nama' => 'VALDO JUNIARTO'],
            ['nis' => '24.6.0034', 'nama' => 'WIDYA PRATIWI'],
            ['nis' => '24.6.0006', 'nama' => 'WITA AGUSTINA'],

        ];

        foreach ($data as $item) {

            // email tanpa spasi + lowercase
            $email = strtolower(str_replace(' ', '', $item['nama'])) . '@gmail.com';

            DB::table('users')->insert([
                'nis' => $item['nis'],
                'name' => $item['nama'],
                'email' => $email,
                'password' => Hash::make('123456789'),
                'role' => 'user',
                'sekolah' => 'A2',
                'kelas' => 'XI AK',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
