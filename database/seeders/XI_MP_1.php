<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XI_MP_1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data pengguna dari kelas XI MP 1
        $data = [
            [ 'name' => 'ALWI SYAH TUL AZZAHRA', 'kelas' => 'XI MP 1', 'email' => 'alwisyahtulazzahra@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0174' ],
            [ 'name' => 'ALYA PUTRI RAHAYU AGUSTINA', 'kelas' => 'XI MP 1', 'email' => 'alyaputrirahayuagustina@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0227' ],
            [ 'name' => 'ANGGITA AZALIA', 'kelas' => 'XI MP 1', 'email' => 'anggitaazalia@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0226' ],
            [ 'name' => 'DARA AYU ALTAFUNNISA', 'kelas' => 'XI MP 1', 'email' => 'daraayualtafunnisa@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0004' ],
            [ 'name' => 'EVA SYAFIRA', 'kelas' => 'XI MP 1', 'email' => 'evasyafira@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0368' ],
            [ 'name' => 'FADLI WIJAYA AZHAR', 'kelas' => 'XI MP 1', 'email' => 'fadliwijayaazhar@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0390' ],
            [ 'name' => 'HELMA PERMATA SARI', 'kelas' => 'XI MP 1', 'email' => 'helmapermatasari@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0049' ],
            [ 'name' => 'INDAH BUNGA ZAENAL', 'kelas' => 'XI MP 1', 'email' => 'indahbungazaenal@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0146' ],
            [ 'name' => 'ISTI RAHMAWATI', 'kelas' => 'XI MP 1', 'email' => 'istirahmawati@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0045' ],
            [ 'name' => 'KAYLA AVIVAHTUL AZZAHRA', 'kelas' => 'XI MP 1', 'email' => 'kaylaavivahtulazzahra@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0039' ],
            [ 'name' => 'KHUSNUL KHOTIMAH', 'kelas' => 'XI MP 1', 'email' => 'khusnulkhotimah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0408' ],
            [ 'name' => 'MAWAR YULIA HASNAH', 'kelas' => 'XI MP 1', 'email' => 'mawaryuliahasnah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0306' ],
            [ 'name' => 'MUHAMAD EKI SAPUTRA', 'kelas' => 'XI MP 1', 'email' => 'muhamadekisaputra@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0304' ],
            [ 'name' => 'MUHAMAD HAIDAR ALI', 'kelas' => 'XI MP 1', 'email' => 'muhamadhaidarali@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0230' ],
            [ 'name' => 'MUHAMAD LUTFI', 'kelas' => 'XI MP 1', 'email' => 'muhamadlutfi@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0259' ],
            [ 'name' => 'MUHAMMAD IBNU NABIL', 'kelas' => 'XI MP 1', 'email' => 'muhammadibnunabil@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0261' ],
            [ 'name' => 'MUHAMMAD ZACKY NAHDIAWAN', 'kelas' => 'XI MP 1', 'email' => 'muhammadzackynahdiawan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0128' ],
            [ 'name' => 'NAURA PUTRI HAFIDZAH', 'kelas' => 'XI MP 1', 'email' => 'nauraputrihafidzah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0252' ],
            [ 'name' => 'NOVITA SARI', 'kelas' => 'XI MP 1', 'email' => 'novitasari@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0081' ],
            [ 'name' => 'NUR AZRINA KHAERUNNISA', 'kelas' => 'XI MP 1', 'email' => 'nurazrinakhaerunnisa@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0161' ],
            [ 'name' => 'SEYRA AULYA PUTRI', 'kelas' => 'XI MP 1', 'email' => 'seyraaulyaputri@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0076' ],
            [ 'name' => 'SHINTA AULIA', 'kelas' => 'XI MP 1', 'email' => 'shintaaulia@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0192' ],
            [ 'name' => 'SINTA FAUZIAH', 'kelas' => 'XI MP 1', 'email' => 'sintafauziah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0278' ],
            [ 'name' => 'SITI NUR AMELIA SARI', 'kelas' => 'XI MP 1', 'email' => 'sitinuraameliasari@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0053' ],
            [ 'name' => 'SITI NURANTI', 'kelas' => 'XI MP 1', 'email' => 'sitinuranti@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0029' ],
            [ 'name' => 'SITI NURUL AZIZAH', 'kelas' => 'XI MP 1', 'email' => 'sitinurulazizah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0254' ],
            [ 'name' => 'SITI QARINA SHAFIRA KAMAL', 'kelas' => 'XI MP 1', 'email' => 'sitiqarinashafirakamal@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0105' ],
            [ 'name' => 'SITI SALMA AULIA', 'kelas' => 'XI MP 1', 'email' => 'sitisalmaaulia@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0047' ],
            [ 'name' => 'SITI SALWA NADIATUL FAUZIAH', 'kelas' => 'XI MP 1', 'email' => 'sitisalwanadiatulfauziah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0203' ],
            [ 'name' => 'SOFIA NURAZIZAH', 'kelas' => 'XI MP 1', 'email' => 'sofianurazizah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0396' ],
            [ 'name' => 'USVANOVA ELMIRA DEANOVA', 'kelas' => 'XI MP 1', 'email' => 'usvanovaelmiradeanova@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0245' ],
            [ 'name' => 'VHANEZA PUTRI RAMADANI', 'kelas' => 'XI MP 1', 'email' => 'vhanezaputriramadani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0389' ],
            [ 'name' => 'VIOLA LOLITA HUMBARA', 'kelas' => 'XI MP 1', 'email' => 'violalolitahumbara@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0334' ],
        ];

        // Looping untuk membuat setiap record User
        foreach ($data as $user) {
            User::create($user);
        }
    }
}