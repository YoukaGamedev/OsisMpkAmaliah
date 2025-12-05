<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XII_MP_1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data pengguna dari kelas XII MP 1
        $data = [
            [ 'name' => 'AMANDA FELIS PEBRIEL', 'kelas' => 'XII MP 1', 'email' => 'amandafelispebriel@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0160' ],
            [ 'name' => 'AMI RAMADHANTI', 'kelas' => 'XII MP 1', 'email' => 'amiramadhanti@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0020' ],
            [ 'name' => 'ARIDA DWI MARLA', 'kelas' => 'XII MP 1', 'email' => 'aridadwimarla@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0397' ],
            [ 'name' => 'CINTA MARCHA NABILA', 'kelas' => 'XII MP 1', 'email' => 'cintamarchanabila@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0146' ],
            [ 'name' => 'HANIFA ANGGRAENI', 'kelas' => 'XII MP 1', 'email' => 'hanifaanggraeni@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0013' ],
            [ 'name' => 'INDRIYANI SRI RAHAYU', 'kelas' => 'XII MP 1', 'email' => 'indriyanisrirahayu@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0024' ],
            [ 'name' => 'ITA BELA', 'kelas' => 'XII MP 1', 'email' => 'itabela@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0208' ],
            [ 'name' => 'JESICA AULIA NURLAELA SARI', 'kelas' => 'XII MP 1', 'email' => 'jesicaaulianurllaelasari@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0192' ],
            [ 'name' => 'KEISHA PUTRI DHIYADHANA', 'kelas' => 'XII MP 1', 'email' => 'keishaputridhiyadhana@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0197' ],
            [ 'name' => 'KEYSHA ZAHRANI RAHMA PUTRI', 'kelas' => 'XII MP 1', 'email' => 'keyshazahranirahmaputri@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0326' ],
            [ 'name' => 'LYONES SHANAS WIDIJANTO', 'kelas' => 'XII MP 1', 'email' => 'lyonesshanaswidijanto@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0235' ],
            [ 'name' => 'MAURA NURUL SUKMA', 'kelas' => 'XII MP 1', 'email' => 'mauranurulsukma@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0021' ],
            [ 'name' => 'MUHAMAD ALDIANSYAH', 'kelas' => 'XII MP 1', 'email' => 'muhamadaldiansyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0250' ],
            [ 'name' => 'PRISKA GISELA', 'kelas' => 'XII MP 1', 'email' => 'priskagisela@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0339' ],
            [ 'name' => 'RAISYA ADISTYA RAHMAN', 'kelas' => 'XII MP 1', 'email' => 'raisyaadistyarahman@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0238' ],
            [ 'name' => 'RAISYA ASYIFA', 'kelas' => 'XII MP 1', 'email' => 'raisyaasyifa@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0318' ],
            [ 'name' => 'RAISYA AZZAHRA RAMADHANI', 'kelas' => 'XII MP 1', 'email' => 'raisyaazzahraramadhani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0335' ],
            [ 'name' => 'RAISYA PUTERI EKA MUSTAUFA', 'kelas' => 'XII MP 1', 'email' => 'raisyaputeriekamustaufa@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0237' ],
            [ 'name' => 'RAISYA PUTRI KHAIRINA', 'kelas' => 'XII MP 1', 'email' => 'raisyaputrikhairina@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0222' ],
            [ 'name' => 'RIMELVI DESTIANI', 'kelas' => 'XII MP 1', 'email' => 'rimelvii destiani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0161' ],
            [ 'name' => 'RIZKA AZZAHRA', 'kelas' => 'XII MP 1', 'email' => 'rizkaazzahra@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0116' ],
            [ 'name' => 'SELFINA', 'kelas' => 'XII MP 1', 'email' => 'selfina@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0196' ],
            [ 'name' => 'SITI AULIA', 'kelas' => 'XII MP 1', 'email' => 'sitiaulia@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0036' ],
            [ 'name' => 'SITI FATIMAH RAHMADINA', 'kelas' => 'XII MP 1', 'email' => 'sitifatimahrahmadina@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0359' ],
            [ 'name' => 'SITI NAURA KIRANIA', 'kelas' => 'XII MP 1', 'email' => 'sitinaurakirania@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0082' ],
            [ 'name' => 'SITI RAHMAWATI', 'kelas' => 'XII MP 1', 'email' => 'sitirahmawati@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0163' ],
            [ 'name' => 'SITI SARAH', 'kelas' => 'XII MP 1', 'email' => 'sitisarah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0152' ],
            [ 'name' => 'SITI SARAH HANDAYANI', 'kelas' => 'XII MP 1', 'email' => 'sitisarahhandayani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0118' ],
            [ 'name' => 'SITI SOVIATUNNISA AWALIYAH', 'kelas' => 'XII MP 1', 'email' => 'sitisoviatunnisaawaliyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0055' ],
            [ 'name' => 'SUSI SUSILAWATI', 'kelas' => 'XII MP 1', 'email' => 'susisusilawati@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0081' ],
            [ 'name' => 'TALITHA NATHANIA RACHMA', 'kelas' => 'XII MP 1', 'email' => 'talithanathaniarachma@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0157' ],
        ];

        // Looping untuk membuat setiap record User
        foreach ($data as $user) {
            User::create($user);
        }
    }
}