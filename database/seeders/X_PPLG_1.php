<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class X_PPLG_1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data pengguna dari kelas X PPLG 1 (berdasarkan file Excel/CSV)
        $data = [
            [ 'name' => 'ABELIA IZZATUL RAHMA', 'kelas' => 'X PPLG 1', 'email' => 'abeliaizzatulrahma@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0371' ],
            [ 'name' => 'ADAM MAULANA HAKIM', 'kelas' => 'X PPLG 1', 'email' => 'adammaulanahakim@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0112' ],
            [ 'name' => 'ANGGITA AULIA', 'kelas' => 'X PPLG 1', 'email' => 'anggitaaulia@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0328' ],
            [ 'name' => 'ARIYA PRATAMA', 'kelas' => 'X PPLG 1', 'email' => 'ariyapratama@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0053' ],
            [ 'name' => 'DEA APRILIA', 'kelas' => 'X PPLG 1', 'email' => 'deaaprilia@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0034' ],
            [ 'name' => 'EVAN FADILLAH HAMZAH', 'kelas' => 'X PPLG 1', 'email' => 'evanfadillahhamzah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0080' ],
            [ 'name' => 'FAZRIEL NAZKA FADILLAH', 'kelas' => 'X PPLG 1', 'email' => 'fazrielnazkafadillah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0379' ],
            [ 'name' => 'FILSA ANAYA ANINDIYA PUTRI', 'kelas' => 'X PPLG 1', 'email' => 'filsaanayaanindiyaputri@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0375' ],
            [ 'name' => 'HAFIZ RIZKY HARDIAZ', 'kelas' => 'X PPLG 1', 'email' => 'hafizrizkyhardiaz@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0222' ],
            [ 'name' => 'KEISHA NAHZA KIRANA', 'kelas' => 'X PPLG 1', 'email' => 'keishanahzakirana@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0099' ],
            [ 'name' => 'MUHAMAD AKBAR', 'kelas' => 'X PPLG 1', 'email' => 'muhamadakbar@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0313' ],
            [ 'name' => 'MUHAMAD ALFATHAN', 'kelas' => 'X PPLG 1', 'email' => 'muhammadalfathan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0242' ],
            [ 'name' => 'MUHAMAD RIFQI SURYADI', 'kelas' => 'X PPLG 1', 'email' => 'muhamadrifqisuryadi@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0273' ],
            [ 'name' => 'MUHAMMAD ALFARIDZY', 'kelas' => 'X PPLG 1', 'email' => 'muhammadalfaridzy@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0015' ],
            [ 'name' => 'MUHAMMAD DAFFA HAMDANU', 'kelas' => 'X PPLG 1', 'email' => 'muhammaddaffahamdanu@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0239' ],
            [ 'name' => 'MUHAMMAD FADHIL NUGRAHA', 'kelas' => 'X PPLG 1', 'email' => 'muhammadfadhilnugraha@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0299' ],
            [ 'name' => 'MUHAMMAD FAHRI RIZIK', 'kelas' => 'X PPLG 1', 'email' => 'muhammadfahririzik@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0209' ],
            [ 'name' => 'MUHAMMAD IKHWANUL KARIM', 'kelas' => 'X PPLG 1', 'email' => 'muhammadikhwanulkarim@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0070' ],
            [ 'name' => 'MUHAMMAD TIRTA SOEYATNA', 'kelas' => 'X PPLG 1', 'email' => 'muhammadtirtasoeyatna@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0237' ],
            [ 'name' => 'MUTIARA ADINDA TRI LESTARI', 'kelas' => 'X PPLG 1', 'email' => 'mutiaraadindatrilestari@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0238' ],
            [ 'name' => 'NAYLA SYAKYLA', 'kelas' => 'X PPLG 1', 'email' => 'naylasyakyla@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0213' ],
            [ 'name' => 'NUR SAFA KHOIRUNNISA', 'kelas' => 'X PPLG 1', 'email' => 'nursafakhoirunnisa@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0206' ],
            [ 'name' => 'RANA JAUHARAH SALSABIL', 'kelas' => 'X PPLG 1', 'email' => 'ranajauharahsalsabil@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0125' ],
            [ 'name' => 'RAPIDO WINARDI', 'kelas' => 'X PPLG 1', 'email' => 'rapidowinardi@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0223' ],
            [ 'name' => 'SABIAN JIMBO RIZKY RAMADHAN SOFYAN', 'kelas' => 'X PPLG 1', 'email' => 'sabianjimborizkyramadhansofyan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0240' ],
            [ 'name' => 'SITI AISYAH', 'kelas' => 'X PPLG 1', 'email' => 'sitiaisyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0364' ],
            [ 'name' => 'SITI SIROTUS SITA', 'kelas' => 'X PPLG 1', 'email' => 'sitisirotussita@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0091' ],
            [ 'name' => 'SULTHAN FAKHRI MUZAKKI', 'kelas' => 'X PPLG 1', 'email' => 'sulthanfakhrimuzakki@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0075' ],
            [ 'name' => 'SYIFA NURULLINA', 'kelas' => 'X PPLG 1', 'email' => 'syifanurullina@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0088' ],
            [ 'name' => 'WILDAN ABIARSA', 'kelas' => 'X PPLG 1', 'email' => 'wildanabiarsa@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0335' ],
            [ 'name' => 'WIRITANAYA FATHARANI DARMANSYAH', 'kelas' => 'X PPLG 1', 'email' => 'wiritanayafatharanidarmansyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0381' ],
        ];

        // Looping untuk membuat setiap record User
        foreach ($data as $user) {
            User::create($user);
        }
    }
}