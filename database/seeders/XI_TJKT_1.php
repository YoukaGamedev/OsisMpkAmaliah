<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XI_TJKT_1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data pengguna dari kelas XII AN (berdasarkan file Excel/CSV)
        $data = [
            [ 'name' => 'ABDUL FAQIH YAMANI', 'kelas' => 'XI TJKT 1', 'email' => 'abdulfaqihyamani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0001' ],

            [ 'name' => 'ADES JULIANTO', 'kelas' => 'XI TJKT 1', 'email' => 'adesjulianto@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0025' ],

            [ 'name' => 'ANGGA ARDIAN SAPUTRA', 'kelas' => 'XI TJKT 1', 'email' => 'anggardiansaputra@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0258' ],

            [ 'name' => 'DEDE IFAZ FAUZAN', 'kelas' => 'XI TJKT 1', 'email' => 'dedeifazfauzan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0058' ],

            [ 'name' => 'DWI ARKAN HADIANSYAH', 'kelas' => 'XI TJKT 1', 'email' => 'dwiarkanhadiansyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0265' ],

            [ 'name' => 'FAISAL ADITYA SAPUTRA', 'kelas' => 'XI TJKT 1', 'email' => 'faisaladityasaputra@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0191' ],

            [ 'name' => 'GHIO ANANDA PUTRA', 'kelas' => 'XI TJKT 1', 'email' => 'ghioanandaputra@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0158' ],

            [ 'name' => 'KHALISA DIRNA', 'kelas' => 'XI TJKT 1', 'email' => 'khalisadirna@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0276' ],

            [ 'name' => 'MARIO SANGGRA HOTMA', 'kelas' => 'XI TJKT 1', 'email' => 'mariosanggrahotma@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0119' ],

            [ 'name' => 'MELANI ANGGRAENI', 'kelas' => 'XI TJKT 1', 'email' => 'melanianggraeni@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0231' ],

            [ 'name' => 'MUHAMAD AKBAR AWALUDIN ZIDAN', 'kelas' => 'XI TJKT 1', 'email' => 'muhamadakbarawaludinzidan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0218' ],

            [ 'name' => 'MUHAMAD CIKAL VIZARO', 'kelas' => 'XI TJKT 1', 'email' => 'muhamadcikalvizaro@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0085' ],

            [ 'name' => 'MUHAMAD DINAR HIDAYAT', 'kelas' => 'XI TJKT 1', 'email' => 'muhamaddinarhidayat@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0074' ],

            [ 'name' => 'MUHAMAD KHUSNUL SIDIK', 'kelas' => 'XI TJKT 1', 'email' => 'muhamadkhusnulsidik@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0413' ],

            [ 'name' => 'MUHAMAD RIFKY MAULANA', 'kelas' => 'XI TJKT 1', 'email' => 'muhamadrifkymaulana@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0124' ],

            [ 'name' => 'MUHAMAD SULTON RIZAL HAFDINATA', 'kelas' => 'XI TJKT 1', 'email' => 'muhamadsultonrizalhafdinata@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0295' ],

            [ 'name' => 'MUHAMAD ZIBRAN MAULADI HAFIZD', 'kelas' => 'XI TJKT 1', 'email' => 'muhamadzibranmauladihafizd@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0340' ],

            [ 'name' => 'MUHAMMAD ADLI FATHAN', 'kelas' => 'XI TJKT 1', 'email' => 'muhammadadlifathan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0339' ],

            [ 'name' => 'MUHAMMAD DARUS PRATAMA FAJAR DINANTO', 'kelas' => 'XI TJKT 1', 'email' => 'muhammaddaruspratamafajardinanto@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0360' ],

            [ 'name' => 'MUHAMMAD FABIAN ARIES', 'kelas' => 'XI TJKT 1', 'email' => 'muhammadfabianaries@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0187' ],

            [ 'name' => 'MUHAMMAD FARHAN', 'kelas' => 'XI TJKT 1', 'email' => 'muhammadfarhan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0281' ],

            [ 'name' => 'MUHAMMAD IQBAL SAN', 'kelas' => 'XI TJKT 1', 'email' => 'muhammadiqbalsan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0103' ],

            [ 'name' => 'MUHAMMAD RAIHAN NABAWI', 'kelas' => 'XI TJKT 1', 'email' => 'muhammadraihannabawi@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0391' ],

            [ 'name' => 'MUHAMMAD REZA ARRAFI', 'kelas' => 'XI TJKT 1', 'email' => 'muhammadrezaarrafi@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0256' ],

            [ 'name' => 'NAYLA FEBIOLA', 'kelas' => 'XI TJKT 1', 'email' => 'naylafebiola@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0280' ],

            [ 'name' => 'RAZMA AVTA NUGRAHA', 'kelas' => 'XI TJKT 1', 'email' => 'razmaavtanugraha@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0055' ],

            [ 'name' => 'RIO FERDIANSYAH', 'kelas' => 'XI TJKT 1', 'email' => 'rioferdiansyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0399' ],

            [ 'name' => 'SANDY ALHUSAINI', 'kelas' => 'XI TJKT 1', 'email' => 'sandyalhusaini@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0173' ],
        ];


        // Looping untuk membuat setiap record User
        foreach ($data as $user) {
            User::create($user);
        }
    }
}