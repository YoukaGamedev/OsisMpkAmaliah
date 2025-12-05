<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XI_LPS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data pengguna dari kelas XI LPS
        $data = [
            [ 'name' => 'ALDA AMALIA PUTRI', 'kelas' => 'XI LPS', 'email' => 'aldaamaliaputri@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0388' ],
            [ 'name' => 'ALFAN PUTRA RAMADHAN', 'kelas' => 'XI LPS', 'email' => 'alfanputraramadhan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0363' ],
            [ 'name' => 'ARINI MUTIARA HAFIZH', 'kelas' => 'XI LPS', 'email' => 'arinimutiarahafizh@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0122' ],
            [ 'name' => 'CARISSA PUTRI SAFRIYADI', 'kelas' => 'XI LPS', 'email' => 'carissaputrisafriyadi@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0297' ],
            [ 'name' => 'CHIKO DAVINA GUNAWATI', 'kelas' => 'XI LPS', 'email' => 'chikodavinagunawati@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0353' ],
            [ 'name' => 'DILI', 'kelas' => 'XI LPS', 'email' => 'dili@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0293' ],
            [ 'name' => 'ENENG RANTI', 'kelas' => 'XI LPS', 'email' => 'enengranti@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0377' ],
            [ 'name' => 'FAIZ NURRIZKI ALFAREZA', 'kelas' => 'XI LPS', 'email' => 'faiznurrizkialfareza@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0148' ],
            [ 'name' => 'KENZA ANZANI', 'kelas' => 'XI LPS', 'email' => 'kenzaanzani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0059' ],
            [ 'name' => 'KHARISA RAHMAWATI', 'kelas' => 'XI LPS', 'email' => 'kharisarahmawati@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0111' ],
            [ 'name' => 'MEI SYAHPUTRI', 'kelas' => 'XI LPS', 'email' => 'meisyahputri@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0210' ],
            [ 'name' => 'MUHAMAD ARDI', 'kelas' => 'XI LPS', 'email' => 'muhamadardi@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0329' ],
            [ 'name' => 'MUHAMAD IMAM SAPUTRA', 'kelas' => 'XI LPS', 'email' => 'muhamadimamsaputra@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0115' ],
            [ 'name' => 'MUHAMAD KHOIRUL ANAMI', 'kelas' => 'XI LPS', 'email' => 'muhamadkhoirulanami@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0354' ],
            [ 'name' => 'MUHAMMAD ICHSAN MAULANA', 'kelas' => 'XI LPS', 'email' => 'muhammadichsanmaulana@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0321' ],
            [ 'name' => 'MUHAMMAD REVAN WAHYU HIDAYAT', 'kelas' => 'XI LPS', 'email' => 'muhammadrevanwahyuhidayat@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0371' ],
            [ 'name' => 'MUTIARA SYIFA AZZAHRA', 'kelas' => 'XI LPS', 'email' => 'mutiarasyifaazzahra@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0204' ],
            [ 'name' => 'NATASYA AURA JASMINE ASRI ALIANSYAH', 'kelas' => 'XI LPS', 'email' => 'natasyaaurajasmineasrialiansyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0370' ],
            [ 'name' => 'NOURA DITA WIDIANA', 'kelas' => 'XI LPS', 'email' => 'nouraditawidiana@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0355' ],
            [ 'name' => 'NOVAL HAFIDZ DIANSYAH', 'kelas' => 'XI LPS', 'email' => 'novalhafidzdiansyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0166' ],
            [ 'name' => 'PUTRI AMELIA', 'kelas' => 'XI LPS', 'email' => 'putriamelia@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0307' ],
            [ 'name' => 'RAHOEL FEBRIANO', 'kelas' => 'XI LPS', 'email' => 'rahoelfebriano@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0398' ],
            [ 'name' => 'RAISYA NUR ASYUARA', 'kelas' => 'XI LPS', 'email' => 'raisynurasyuara@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0186' ],
            [ 'name' => 'RAMADHAN RIZKY WIBOWO', 'kelas' => 'XI LPS', 'email' => 'ramadhanrizkywibowo@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0331' ],
            [ 'name' => 'RISKA ALZAHRA', 'kelas' => 'XI LPS', 'email' => 'riskaalzahra@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0369' ],
            [ 'name' => 'ROCHELLA MULIA PUTRI', 'kelas' => 'XI LPS', 'email' => 'rochellamuliaputri@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0328' ],
            [ 'name' => 'SHYLA NUR AZAHRA', 'kelas' => 'XI LPS', 'email' => 'shylanurazahra@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0366' ],
            [ 'name' => 'SITI ALFIRA NURFAIZIN RAHAYU', 'kelas' => 'XI LPS', 'email' => 'sitialfiranurfaizinrahayu@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0099' ],
            [ 'name' => 'TIYAS ISWARI RAMADHANI', 'kelas' => 'XI LPS', 'email' => 'tiyasiswariramadhani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0382' ],
        ];

        // Looping untuk membuat setiap record User
        foreach ($data as $user) {
            User::create($user);
        }
    }
}