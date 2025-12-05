<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XI_MP_2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data pengguna dari kelas XI MP 2
        $data = [
            [ 'name' => 'AIDA RAMADANI', 'kelas' => 'XI MP 2', 'email' => 'aidaramadani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0096' ],
            [ 'name' => 'ALVIAN PUTRA ARDHANI', 'kelas' => 'XI MP 2', 'email' => 'alvianputraardhani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0130' ],
            [ 'name' => 'ANGGI EKA OKTAWIANSAH', 'kelas' => 'XI MP 2', 'email' => 'anggiekaoktawiansah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0228' ],
            [ 'name' => 'ANILDA LESTARI', 'kelas' => 'XI MP 2', 'email' => 'anildalestari@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0163' ],
            [ 'name' => 'ANINDYA TRI NOVRYANDINI', 'kelas' => 'XI MP 2', 'email' => 'anindyatrinovryandini@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0167' ],
            [ 'name' => 'ANISA SUWANDI', 'kelas' => 'XI MP 2', 'email' => 'anisasuwandi@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0038' ],
            [ 'name' => 'ANISA SYAHRANI', 'kelas' => 'XI MP 2', 'email' => 'anisasyahrani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0220' ],
            [ 'name' => 'ASYA NADIRA AGUSMANSYAH', 'kelas' => 'XI MP 2', 'email' => 'asyanadiraagusmansyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0136' ],
            [ 'name' => 'AZKIA HILWAYA ATSULATSA', 'kelas' => 'XI MP 2', 'email' => 'azkiahilwayaatsulatsa@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0335' ],
            [ 'name' => 'DEA APRILIA', 'kelas' => 'XI MP 2', 'email' => 'deaaprilia2@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0172' ],
            [ 'name' => 'FERISYA AGHFA NURAYRA', 'kelas' => 'XI MP 2', 'email' => 'ferisyaaghfanurayra@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0064' ],
            [ 'name' => 'FITRIYANI AGUSTINA', 'kelas' => 'XI MP 2', 'email' => 'fitriyaniagustina@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0344' ],
            [ 'name' => 'M INDRAWAN', 'kelas' => 'XI MP 2', 'email' => 'mindrawan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0267' ],
            [ 'name' => 'MARSYA ALIANUR MAULIDA', 'kelas' => 'XI MP 2', 'email' => 'marsyaalianurmaulida@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0089' ],
            [ 'name' => 'MAZAYA SHAFA PRAMESTY', 'kelas' => 'XI MP 2', 'email' => 'mazayashafapramesty@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0300' ],
            [ 'name' => 'MUHAMAD FAKHRIZA PADILAH', 'kelas' => 'XI MP 2', 'email' => 'muhamadfakhrizapadilah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0069' ],
            [ 'name' => 'MUHAMMAD AL FARIZI', 'kelas' => 'XI MP 2', 'email' => 'muhammadalfarizi@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0057' ],
            [ 'name' => 'NADYA ULYA NUR WAFA', 'kelas' => 'XI MP 2', 'email' => 'nadyaulyanurwafa@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0175' ],
            [ 'name' => 'NANDA NOVA AULIA', 'kelas' => 'XI MP 2', 'email' => 'nandanovaaulia@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0154' ],
            [ 'name' => 'NEZA HAIFA RAMADHANI', 'kelas' => 'XI MP 2', 'email' => 'nezahaifaramadhani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0097' ],
            [ 'name' => 'NUR ALIZA RAMADHANI', 'kelas' => 'XI MP 2', 'email' => 'nuralizaramadhani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0077' ],
            [ 'name' => 'PUTRI FIRYAL HUSNIYYA', 'kelas' => 'XI MP 2', 'email' => 'putrifryalhusniyya@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0030' ],
            [ 'name' => 'RADEN NAFILAH AMALIA PUTRI', 'kelas' => 'XI MP 2', 'email' => 'radennafilahamaliaputri@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0352' ],
            [ 'name' => 'RESTI SETIANI', 'kelas' => 'XI MP 2', 'email' => 'restisetiani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0250' ],
            [ 'name' => 'SALWA SALSABILA SAFITRI', 'kelas' => 'XI MP 2', 'email' => 'salwasalsabilasafitri@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0351' ],
            [ 'name' => 'SASQIA SYAH', 'kelas' => 'XI MP 2', 'email' => 'sasqiasyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0072' ],
            [ 'name' => 'SITI SILVIA', 'kelas' => 'XI MP 2', 'email' => 'sitisilvia@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0292' ],
            [ 'name' => 'ST. RAHMAWATI', 'kelas' => 'XI MP 2', 'email' => 'strahmawati@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0019' ],
            [ 'name' => 'VIONA DAMAYANTI', 'kelas' => 'XI MP 2', 'email' => 'vionadamayanti@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0315' ],
        ];

        // Looping untuk membuat setiap record User
        foreach ($data as $user) {
            User::create($user);
        }
    }
}