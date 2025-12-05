<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XII_TJKT_2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data pengguna dari kelas XII TJKT 2 (berdasarkan file Excel/CSV)
        $data = [
            [ 'name' => 'ACHMAD SULISTIYO', 'kelas' => 'XII TJKT 2', 'email' => 'achmadsulistiyo@gmail.com', 'password' => Hash::make('password123'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0142' ],
            [ 'name' => 'APRI KURNIAWAN', 'kelas' => 'XII TJKT 2', 'email' => 'aprikurniawan@gmail.com', 'password' => Hash::make('password123'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0333' ],
            [ 'name' => 'AZIKRA MAULANA', 'kelas' => 'XII TJKT 2', 'email' => 'azikramaulana@gmail.com', 'password' => Hash::make('password123'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0113' ],
            [ 'name' => 'BAGAS PERMANA PUTRA', 'kelas' => 'XII TJKT 2', 'email' => 'bagaspermanaputra@gmail.com', 'password' => Hash::make('password123'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0030' ],
            [ 'name' => 'FADILAH MUHAMMAD ZACKI', 'kelas' => 'XII TJKT 2', 'email' => 'fadilahmuhammadzacki@gmail.com', 'password' => Hash::make('password123'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0136' ],
            [ 'name' => 'ILHAM ARDIANSYAH', 'kelas' => 'XII TJKT 2', 'email' => 'ilhamardiansyah@gmail.com', 'password' => Hash::make('password123'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0248' ],
            [ 'name' => 'MARIO PRASETYO', 'kelas' => 'XII TJKT 2', 'email' => 'marioprasetyo@gmail.com', 'password' => Hash::make('password123'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0079' ],
            [ 'name' => 'MOCHAMAD RAJIB ALFURQONI', 'kelas' => 'XII TJKT 2', 'email' => 'mochamadrajibalfurqoni@gmail.com', 'password' => Hash::make('password123'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0211' ],
            [ 'name' => 'MOCHAMAD RASYID PERMANA', 'kelas' => 'XII TJKT 2', 'email' => 'mochamadrasyidpermana@gmail.com', 'password' => Hash::make('password123'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0085' ],
            [ 'name' => 'MUCHAMAD RIZQI', 'kelas' => 'XII TJKT 2', 'email' => 'muchamadrizqi@gmail.com', 'password' => Hash::make('password123'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0298' ],
            [ 'name' => 'MUHAMAD DERY FERDIANSYAH', 'kelas' => 'XII TJKT 2', 'email' => 'muhamadderyferdiansyah@gmail.com', 'password' => Hash::make('password123'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0042' ],
            [ 'name' => 'MUHAMAD DIAZ ADITIYA', 'kelas' => 'XII TJKT 2', 'email' => 'muhamaddiazaditiya@gmail.com', 'password' => Hash::make('password123'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0080' ],
            [ 'name' => 'MUHAMAD FARHAN RAMDANI', 'kelas' => 'XII TJKT 2', 'email' => 'muhamadfarhanramdani@gmail.com', 'password' => Hash::make('password123'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0239' ],
            [ 'name' => 'MUHAMAD NABIL AULIA', 'kelas' => 'XII TJKT 2', 'email' => 'muhamadnabilaulia@gmail.com', 'password' => Hash::make('password123'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0119' ],
            [ 'name' => 'MUHAMAD RIDWANULLOH', 'kelas' => 'XII TJKT 2', 'email' => 'muhamadridwanulloh@gmail.com', 'password' => Hash::make('password123'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0206' ],
            [ 'name' => 'MUHAMAD RIFALDI SETIAWAN', 'kelas' => 'XII TJKT 2', 'email' => 'muhamadrifaldisetiawan@gmail.com', 'password' => Hash::make('password123'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0168' ],
            [ 'name' => 'MUHAMAD RIPAN PEBRIAN', 'kelas' => 'XII TJKT 2', 'email' => 'muhamadripanpebrian@gmail.com', 'password' => Hash::make('password123'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0253' ],
            [ 'name' => 'MUHAMMAD ADITIA SURYA PRATAMA', 'kelas' => 'XII TJKT 2', 'email' => 'muhammadaditiasuryapratama@gmail.com', 'password' => Hash::make('password123'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0067' ],
            [ 'name' => 'MUHAMMAD FADHLUN SANTOSO', 'kelas' => 'XII TJKT 2', 'email' => 'muhammadfadhlunsantoso@gmail.com', 'password' => Hash::make('password123'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0035' ],
            [ 'name' => 'MUHAMMAD FIRMANSYAH GUMILANG', 'kelas' => 'XII TJKT 2', 'email' => 'muhammadfirmansyahgumilang@gmail.com', 'password' => Hash::make('password123'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0073' ],
            [ 'name' => 'MUHAMMAD HILDAN', 'kelas' => 'XII TJKT 2', 'email' => 'muhammadhildan@gmail.com', 'password' => Hash::make('password123'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0054' ],
            [ 'name' => 'MUHAMMAD IDRUS', 'kelas' => 'XII TJKT 2', 'email' => 'muhammadidrus@gmail.com', 'password' => Hash::make('password123'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0019' ],
            [ 'name' => 'MUHAMMAD NADZAR ROJA ABDULLAH', 'kelas' => 'XII TJKT 2', 'email' => 'muhammadnadzarrojaabdullah@gmail.com', 'password' => Hash::make('password123'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0039' ],
            [ 'name' => 'MUHAMMAD PUTRA RAMADHAN', 'kelas' => 'XII TJKT 2', 'email' => 'muhammadputraramadhan@gmail.com', 'password' => Hash::make('password123'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0022' ],
            [ 'name' => 'MUHAMMAD RAFI ALFAWWAZ', 'kelas' => 'XII TJKT 2', 'email' => 'muhammadrafialfawwaz@gmail.com', 'password' => Hash::make('password123'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0255' ],
            [ 'name' => 'MUHAMMAD REFAN TRIAWAN', 'kelas' => 'XII TJKT 2', 'email' => 'muhammadrefantriawan@gmail.com', 'password' => Hash::make('password123'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0236' ],
            [ 'name' => 'MUHAMMAD ZAKKY MUBAROK', 'kelas' => 'XII TJKT 2', 'email' => 'muhammadzakkymubarok@gmail.com', 'password' => Hash::make('password123'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0209' ],
            [ 'name' => 'NYNDHIAZ ALLYSCHAFITRI', 'kelas' => 'XII TJKT 2', 'email' => 'nyndhiazallyschafitri@gmail.com', 'password' => Hash::make('password123'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0300' ],
            [ 'name' => 'REHAN', 'kelas' => 'XII TJKT 2', 'email' => 'rehan@gmail.com', 'password' => Hash::make('password123'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0001' ],
            [ 'name' => 'REZA ADRIAN', 'kelas' => 'XII TJKT 2', 'email' => 'rezaadrian@gmail.com', 'password' => Hash::make('password123'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0224' ],
            [ 'name' => 'RIDHO FITRA RAMADHAN', 'kelas' => 'XII TJKT 2', 'email' => 'ridhofitraramadhan@gmail.com', 'password' => Hash::make('password123'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0137' ],
            [ 'name' => 'RIFA NOVIANTI', 'kelas' => 'XII TJKT 2', 'email' => 'rifanovianti@gmail.com', 'password' => Hash::make('password123'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0044' ],
            [ 'name' => 'SHAQUILLE RENJIRO FIRLO P', 'kelas' => 'XII TJKT 2', 'email' => 'shaquillerenjirofirlo@gmail.com', 'password' => Hash::make('password123'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0100' ],
            [ 'name' => 'ZAHRAN MALIKI MUMTAZ', 'kelas' => 'XII TJKT 2', 'email' => 'zahranmalikimumtaz@gmail.com', 'password' => Hash::make('password123'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0051' ],
        ];

        // Looping untuk membuat setiap record User
        foreach ($data as $user) {
            User::create($user);
        }
    }
}