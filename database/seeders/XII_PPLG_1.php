<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XII_PPLG_1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data pengguna dari kelas XI PPLG 1 (berdasarkan file Excel/CSV)
        $data = [
            [ 'name' => 'A. MALIK IBRAHIM', 'kelas' => 'XII PPLG 1', 'email' => 'amalikibrahim@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0402' ],
            [ 'name' => 'ABDUL AZIS MAULANA IBRAHIM', 'kelas' => 'XII PPLG 1', 'email' => 'abdulazismaulanaibrahim@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0329' ],
            [ 'name' => 'AGUNG GEMETER', 'kelas' => 'XII PPLG 1', 'email' => 'agunggumelar@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0083' ],
            [ 'name' => 'ALFRIZA AKHMAD RAHADI', 'kelas' => 'XII PPLG 1', 'email' => 'alfrizaakhmadrahadi@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0294' ],
            [ 'name' => 'ANDIKA PUTRA PRATAMA', 'kelas' => 'XII PPLG 1', 'email' => 'andikaputrapratama@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0200' ],
            [ 'name' => 'ARTHA PARULIAN SILITONGA', 'kelas' => 'XII PPLG 1', 'email' => 'arthaparuliansilitonga@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0316' ],
            [ 'name' => 'AZZAHROTUS SYIFA', 'kelas' => 'XII PPLG 1', 'email' => 'azzahrotussyifa@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0376' ],
            [ 'name' => 'BASSAM SAID MUHAMMAD', 'kelas' => 'XII PPLG 1', 'email' => 'bassamsaidmuhammad@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0108' ],
            [ 'name' => 'DIMAS JUNIANSYAH', 'kelas' => 'XII PPLG 1', 'email' => 'dimasjuniansyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0305' ],
            [ 'name' => 'FATTIH FAWWAZ SUTISNA', 'kelas' => 'XII PPLG 1', 'email' => 'fattihfawwazsutisna@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0232' ],
            [ 'name' => 'FITRI OKTAVIA SEMBIRING', 'kelas' => 'XII PPLG 1', 'email' => 'fitrioktaviasembiring@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0166' ],
            [ 'name' => 'HARSYA RAHADIAN PUTRA NURDIN', 'kelas' => 'XII PPLG 1', 'email' => 'harsyarahadianputranurdin@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0330' ],
            [ 'name' => 'INDRA HERLAMBANG SETIAWAN', 'kelas' => 'XII PPLG 1', 'email' => 'indraherlambangsetiawan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0075' ],
            [ 'name' => 'M RIFFAI', 'kelas' => 'XII PPLG 1', 'email' => 'mriffai@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0061' ],
            [ 'name' => 'MUHAMAD ALDO ABDILLAH ROJAN', 'kelas' => 'XII PPLG 1', 'email' => 'muhamadaldoabdillahrojan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0384' ],
            [ 'name' => 'MUHAMAD FAHMILATHUN', 'kelas' => 'XII PPLG 1', 'email' => 'muhamadfahmilathun@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0241' ],
            [ 'name' => 'MUHAMMAD AL FAHRI R', 'kelas' => 'XII PPLG 1', 'email' => 'muhammadalfahrir@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0382' ],
            [ 'name' => 'MUHAMMAD AZKA MAULIDINA', 'kelas' => 'XII PPLG 1', 'email' => 'muhammaداzkamaulidina@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0212' ],
            [ 'name' => 'MUHAMMAD FACHRI SANUSI', 'kelas' => 'XII PPLG 1', 'email' => 'muhammadfachrisanusi@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0324' ],
            [ 'name' => 'MUHAMMAD FAUZAN PRATAMA', 'kelas' => 'XII PPLG 1', 'email' => 'muhammadfauzanpratama@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0104' ],
            [ 'name' => 'MUHAMMAD ILYA HAMZAH', 'kelas' => 'XII PPLG 1', 'email' => 'muhammadilyahamzah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0009' ],
            [ 'name' => 'MUHAMMAD RAIHAN FIRDAUS', 'kelas' => 'XII PPLG 1', 'email' => 'muhammadرaihanfirdaus@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0060' ],
            [ 'name' => 'MUHAMMAD SYAWAL FAHRIZA', 'kelas' => 'XII PPLG 1', 'email' => 'muhammadsyawalfahriza@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0338' ],
            [ 'name' => 'MUHAMMAD ZIDAN SAPUTRA', 'kelas' => 'XII PPLG 1', 'email' => 'muhammadzidansaputra@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0297' ],
            [ 'name' => 'MUHAMMAD ZIDANE GUNAWAN', 'kelas' => 'XII PPLG 1', 'email' => 'muhammadzidanegunawan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0290' ],
            [ 'name' => 'SAFA SOPIAN ALI BASYA', 'kelas' => 'XII PPLG 1', 'email' => 'safasopianalibasya@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0308' ],
            [ 'name' => 'SATRIO AZKA RITADJI', 'kelas' => 'XII PPLG 1', 'email' => 'satrioazkaritadji@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0008' ],
            [ 'name' => 'SINTIA SUPRAPTO', 'kelas' => 'XII PPLG 1', 'email' => 'sintiasuprapto@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0004' ],
            [ 'name' => 'SITI ANISA SULISTIAWATI', 'kelas' => 'XII PPLG 1', 'email' => 'sitianisasulistiawati@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0302' ],
            [ 'name' => 'SITI MARSYA MAHARANI', 'kelas' => 'XII PPLG 1', 'email' => 'sitimarsyamaharani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0052' ],
        ];

        // Looping untuk membuat setiap record User
        foreach ($data as $user) {
            User::create($user);
        }
    }
}