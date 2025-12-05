<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XII_MP_2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data pengguna dari kelas XII MP 2
        $data = [
            [ 'name' => 'AMALIA AFRIANI', 'kelas' => 'XII MP 2', 'email' => 'amaliaafriani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0156' ],
            [ 'name' => 'ARISTIA CAHYANI', 'kelas' => 'XII MP 2', 'email' => 'aristiacahyani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0059' ],
            [ 'name' => 'AUDIA PUTRI SUKATMA', 'kelas' => 'XII MP 2', 'email' => 'audiaputrisukatma@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0143' ],
            [ 'name' => 'BILQIS ARLA MAHARANI', 'kelas' => 'XII MP 2', 'email' => 'bilqisarlamaharani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0204' ],
            [ 'name' => 'DEA MELINDA', 'kelas' => 'XII MP 2', 'email' => 'deamelinda@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0092' ],
            [ 'name' => 'DELA SETIA HANDYANI', 'kelas' => 'XII MP 2', 'email' => 'delasetiahandyani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0078' ],
            [ 'name' => 'DENATA RASYIDAH BAHRI', 'kelas' => 'XII MP 2', 'email' => 'denatarasyidahbahri@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0266' ],
            [ 'name' => 'DESTI MEILANI PUTRI', 'kelas' => 'XII MP 2', 'email' => 'destimeilaniputri@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0191' ],
            [ 'name' => 'DIAN ESA PERMATASARI', 'kelas' => 'XII MP 2', 'email' => 'edianesapermatasari@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0131' ],
            [ 'name' => 'GITA WIYAHRAHMAN', 'kelas' => 'XII MP 2', 'email' => 'gitawiyahrahman@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0245' ],
            [ 'name' => 'INTAN SITI SHOFIA', 'kelas' => 'XII MP 2', 'email' => 'intansitishofia@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0138' ],
            [ 'name' => 'MEIVA FAIQ FIKRIYAH', 'kelas' => 'XII MP 2', 'email' => 'meivafaiqfikriyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0396' ],
            [ 'name' => 'NABILA PUTRI', 'kelas' => 'XII MP 2', 'email' => 'nabilaputri@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0171' ],
            [ 'name' => 'NAURAH PUTERI RAYYANI', 'kelas' => 'XII MP 2', 'email' => 'naurahputerirayyani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0226' ],
            [ 'name' => 'NAZLA ZAHIRAH', 'kelas' => 'XII MP 2', 'email' => 'nazlazahirah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0153' ],
            [ 'name' => 'NUR KAYLA RAHMANISA', 'kelas' => 'XII MP 2', 'email' => 'nurkaylarahmanisa@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0177' ],
            [ 'name' => 'PRANESYHA KAMALITA PUTRI', 'kelas' => 'XII MP 2', 'email' => 'pranesyhakamalitaputri@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0028' ],
            [ 'name' => 'RAHMA PARDHA AULIA', 'kelas' => 'XII MP 2', 'email' => 'rahmapardhaaulia@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0097' ],
            [ 'name' => 'RATNAWATI KUSUMANING AYU', 'kelas' => 'XII MP 2', 'email' => 'ratnawatikusumaningayu@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0337' ],
            [ 'name' => 'RIZKYA CAILA FEBRYANTI', 'kelas' => 'XII MP 2', 'email' => 'rizkyacailafebryanti@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0101' ],
            [ 'name' => 'SALSABILA', 'kelas' => 'XII MP 2', 'email' => 'salsabila@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0115' ],
            [ 'name' => 'SALWA SYABANI', 'kelas' => 'XII MP 2', 'email' => 'salwasyabani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0286' ],
            [ 'name' => 'SHABDILLA FEBRIANA SAVIRA', 'kelas' => 'XII MP 2', 'email' => 'shabdillafebbrianasavira@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0071' ],
            [ 'name' => 'SIFA RAHMAWATI', 'kelas' => 'XII MP 2', 'email' => 'sifarahmawati@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0050' ],
            [ 'name' => 'SILLY AFRILIA', 'kelas' => 'XII MP 2', 'email' => 'sillyafrilia@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0176' ],
            [ 'name' => 'SITI SYAHWA AGUSTINA', 'kelas' => 'XII MP 2', 'email' => 'sitisyahwaagustina@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0269' ],
            [ 'name' => 'YANUARITA MAHARANI SUWANDI', 'kelas' => 'XII MP 2', 'email' => 'yanuaritamaharanisuwandi@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0342' ],
            [ 'name' => 'ZAHRA MARTHASYA AULIANTY', 'kelas' => 'XII MP 2', 'email' => 'zahramarthasyaaulianty@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '23.6.0327' ],
        ];

        // Looping untuk membuat setiap record User
        foreach ($data as $user) {
            User::create($user);
        }
    }
}