<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class X_DKV extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data pengguna dari kelas X DKV (berdasarkan file Excel/CSV)
        $data = [
            [ 'name' => 'ADIKA PRIATNA', 'kelas' => 'X DKV', 'email' => 'adikapriatna@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0349' ],
            [ 'name' => 'AGUNG RAMDHANI DZAKARIA', 'kelas' => 'X DKV', 'email' => 'agungramdhanidzakaria@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0038' ],
            [ 'name' => 'ALFAIRUZ MAULIDAN PUTRA', 'kelas' => 'X DKV', 'email' => 'alfairuzmaulidanputra@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0117' ],
            [ 'name' => 'ALIYYA PUTRI RAMADHANI', 'kelas' => 'X DKV', 'email' => 'aliyyaputriramadhani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0380' ],
            [ 'name' => 'ALMA AINNAYA', 'kelas' => 'X DKV', 'email' => 'almaainnaya@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0356' ],
            [ 'name' => 'ANA MARIZKA IRAWAN', 'kelas' => 'X DKV', 'email' => 'anamaريzkairawan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0090' ],
            [ 'name' => 'ANANDITA RAHAYU', 'kelas' => 'X DKV', 'email' => 'ananditarahayu@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0193' ],
            [ 'name' => 'ARRAFI ADILA FADILAH', 'kelas' => 'X DKV', 'email' => 'arrafiadilafadilah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0361' ],
            [ 'name' => 'AURELLIE PUTRI HAFEEZA', 'kelas' => 'X DKV', 'email' => 'aurellieputrihafeeza@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0319' ],
            [ 'name' => 'AYUNIAR WINDARI', 'kelas' => 'X DKV', 'email' => 'ayuniarwindari@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0386' ],
            [ 'name' => 'AZZAM FAUZAN CHAIRULLAH', 'kelas' => 'X DKV', 'email' => 'azzamfauzanchairullah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0359' ],
            [ 'name' => 'CLARRISSA DWI RUSIYANTO PUTRI', 'kelas' => 'X DKV', 'email' => 'clarrissadwirusيyantoputri@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0373' ],
            [ 'name' => 'HAFY NARARYA INDRAPUTRA', 'kelas' => 'X DKV', 'email' => 'hafynararyaindraputra@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0271' ],
            [ 'name' => 'HAIKAL YUDHISTIRA', 'kelas' => 'X DKV', 'email' => 'haikalyudhistira@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0346' ],
            [ 'name' => 'KANAYA LAILATUL KHANZA', 'kelas' => 'X DKV', 'email' => 'kanayalailatulkhanza@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0121' ],
            [ 'name' => 'KHANZA DIVIA', 'kelas' => 'X DKV', 'email' => 'khanzadivia@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0329' ],
            [ 'name' => 'LINTANG KENCANA', 'kelas' => 'X DKV', 'email' => 'lintangkencana@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0320' ],
            [ 'name' => 'M. AZKA ERLANGGA', 'kelas' => 'X DKV', 'email' => 'mazkaerlangga@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0201' ],
            [ 'name' => 'M. MUGISI NURUL HADI', 'kelas' => 'X DKV', 'email' => 'mmugisinurulhadi@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0182' ],
            [ 'name' => 'MUHAMAD AKBAR SAPUTRA', 'kelas' => 'X DKV', 'email' => 'muhamadakbarsaputra@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0170' ],
            [ 'name' => 'MUHAMMAD FAIZ FATHURAHMAN', 'kelas' => 'X DKV', 'email' => 'muhammadfaizfathurahman@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0352' ],
            [ 'name' => 'MUHAMMAD WILDANUL AKHDAN', 'kelas' => 'X DKV', 'email' => 'muhammadwildanulakhdan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0347' ],
            [ 'name' => 'NAYA NURI ISNAENI', 'kelas' => 'X DKV', 'email' => 'nayanուriisnaeni@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0107' ],
            [ 'name' => 'RESYA PATRA SUKMAWILIANI', 'kelas' => 'X DKV', 'email' => 'resyapatrasukmawiliani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0261' ],
            [ 'name' => 'SARAH', 'kelas' => 'X DKV', 'email' => 'sarah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0323' ],
            [ 'name' => 'SITI KIRANIA AL ISLAMI', 'kelas' => 'X DKV', 'email' => 'sitikiraniaalislami@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0316' ],
            [ 'name' => 'SITI SARAH MEILANA', 'kelas' => 'X DKV', 'email' => 'sitisarahmeilana@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0086' ],
            [ 'name' => 'VALEXA PUTRI', 'kelas' => 'X DKV', 'email' => 'valexaputri@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0097' ],
            [ 'name' => 'ZEMA AZKIA HAIDAR', 'kelas' => 'X DKV', 'email' => 'zemaazkiahaidar@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0073' ],
        ];

        // Looping untuk membuat setiap record User
        foreach ($data as $user) {
            User::create($user);
        }
    }
}