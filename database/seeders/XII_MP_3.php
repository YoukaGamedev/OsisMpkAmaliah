<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XII_MP_3 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data pengguna dari kelas XII MP 3
        $data = [
            [ 'name' => 'AGNIA WIRDATUNISA', 'kelas' => 'XII MP 3', 'email' => 'agniawirdatunisa@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0112' ],
            [ 'name' => 'ALFI NURHASANAH', 'kelas' => 'XII MP 3', 'email' => 'alfinurhasanah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0134' ],
            [ 'name' => 'AULIA AGISCA SYAHRUDIN', 'kelas' => 'XII MP 3', 'email' => 'auliaagiscasyahrudin@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0012' ],
            [ 'name' => 'AULIA AMANDA ALAMSYAH', 'kelas' => 'XII MP 3', 'email' => 'auliaamandaalamsyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0278' ],
            [ 'name' => 'AZKA AZKIA', 'kelas' => 'XII MP 3', 'email' => 'azkaazkia@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0126' ],
            [ 'name' => 'AZZAHRA JULIANTI FAHRUDIN', 'kelas' => 'XII MP 3', 'email' => 'azzahrajuliantifahrudin@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0279' ],
            [ 'name' => 'BERLYAN DENIESA', 'kelas' => 'XII MP 3', 'email' => 'berlyandeniesa@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0242' ],
            [ 'name' => 'DEVI ROSDIANA', 'kelas' => 'XII MP 3', 'email' => 'devirosdiana@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0048' ],
            [ 'name' => 'DIANA SEPTIANI', 'kelas' => 'XII MP 3', 'email' => 'dianaseptiani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0025' ],
            [ 'name' => 'ELGA PADILAH SARI', 'kelas' => 'XII MP 3', 'email' => 'elgapadilahsari@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0107' ],
            [ 'name' => 'FEBRIANI AYU FRIATNA', 'kelas' => 'XII MP 3', 'email' => 'febrianiayufriatna@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0230' ],
            [ 'name' => 'IRSYA SEPIA RAHMADANI', 'kelas' => 'XII MP 3', 'email' => 'irsyasepiarahmadani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0287' ],
            [ 'name' => 'KHAIRUNISA MULYA NAVIRA', 'kelas' => 'XII MP 3', 'email' => 'khairunisamulyanavira@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0323' ],
            [ 'name' => 'LISNA NURMALA SARI', 'kelas' => 'XII MP 3', 'email' => 'lisnanurmalasari@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0263' ],
            [ 'name' => 'MAY FIRA RASAKI', 'kelas' => 'XII MP 3', 'email' => 'mayfirarasaki@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0128' ],
            [ 'name' => 'MIYA TIARA', 'kelas' => 'XII MP 3', 'email' => 'miyatiara@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0127' ],
            [ 'name' => 'MUHAMMAD FAJAR ARDIANSYAH', 'kelas' => 'XII MP 3', 'email' => 'muhammadfajarardiansyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0265' ],
            [ 'name' => 'MUTYA RESTYANA', 'kelas' => 'XII MP 3', 'email' => 'mutyarestyana@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0180' ],
            [ 'name' => 'NABILA APRILIA', 'kelas' => 'XII MP 3', 'email' => 'nabilaaprilia@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0292' ],
            [ 'name' => 'RAMA MARAHAI SOEKARNO', 'kelas' => 'XII MP 3', 'email' => 'ramamarahaisoekarno@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0229' ],
            [ 'name' => 'SALWA AL SAKINAH BAEHAKI', 'kelas' => 'XII MP 3', 'email' => 'salwaalsakinahbaehaki@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0033' ],
            [ 'name' => 'SITI BILQIS SULTANIYAH', 'kelas' => 'XII MP 3', 'email' => 'sitibilqissultaniyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0183' ],
            [ 'name' => 'SITI RASITA ALDA PUTRI', 'kelas' => 'XII MP 3', 'email' => 'sitirasitaaldaputri@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0190' ],
            [ 'name' => 'SYATIRA AL HABSYI', 'kelas' => 'XII MP 3', 'email' => 'syatiraalhabsyi@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0072' ],
            [ 'name' => 'SYNTHIA JAMILY', 'kelas' => 'XII MP 3', 'email' => 'synthiajamily@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0093' ],
        ];

        // Looping untuk membuat setiap record User
        foreach ($data as $user) {
            User::create($user);
        }
    }
}