<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XII_TJKT_1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data pengguna dari kelas XII TJKT 1 (berdasarkan file Excel/CSV)
        $data = [
            [ 'name' => 'ABDILLAH RAFI HARDIAN', 'kelas' => 'XII TJKT 1', 'email' => 'abdillahrafihardian@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0372' ],
            [ 'name' => 'ALI AKMAL ZAIN', 'kelas' => 'XII TJKT 1', 'email' => 'aliakmalzain@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0198' ],
            [ 'name' => 'ALIKA NOVIANSYAH', 'kelas' => 'XII TJKT 1', 'email' => 'alikanoviansyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0185' ],
            [ 'name' => 'ARMAN MAULANA', 'kelas' => 'XII TJKT 1', 'email' => 'armanmaulana@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0066' ],
            [ 'name' => 'DIMAS PUTRA RAMDHANI', 'kelas' => 'XII TJKT 1', 'email' => 'dimasputraramdhani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0122' ],
            [ 'name' => 'EGA PRATAMA', 'kelas' => 'XII TJKT 1', 'email' => 'egapratama@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0074' ],
            [ 'name' => 'FACHRI HASANI', 'kelas' => 'XII TJKT 1', 'email' => 'fachrihasani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0027' ],
            [ 'name' => 'GINAN MAULANA AKBAR', 'kelas' => 'XII TJKT 1', 'email' => 'ginanmaulanaakbar@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0159' ],
            [ 'name' => 'GUTSYAF FAHRYGAFRYZA ANDHYARAMA', 'kelas' => 'XII TJKT 1', 'email' => 'gutsyaffahrygafryzaandhyarama@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0273' ],
            [ 'name' => 'KELVIN ANDREAS', 'kelas' => 'XII TJKT 1', 'email' => 'kelvinandreas@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0135' ],
            [ 'name' => 'M. RASYA BAGJA PURNAMA', 'kelas' => 'XII TJKT 1', 'email' => 'mrasyabagjapurnama@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0195' ],
            [ 'name' => 'MOH.FACHRI AKBAR', 'kelas' => 'XII TJKT 1', 'email' => 'mohfachriakbar@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0165' ],
            [ 'name' => 'MUCHAMMAD RYAN', 'kelas' => 'XII TJKT 1', 'email' => 'muchammadryan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0283' ],
            [ 'name' => 'MUHAMAD ADITIA', 'kelas' => 'XII TJKT 1', 'email' => 'muhamadaditia@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0094' ],
            [ 'name' => 'MUHAMAD AFTSAB CASSIM RAZVI', 'kelas' => 'XII TJKT 1', 'email' => 'muhamadaftsabcassimrazvi@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0123' ],
            [ 'name' => 'MUHAMAD APRILIANSYAH', 'kelas' => 'XII TJKT 1', 'email' => 'muhamadapriliansyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0098' ],
            [ 'name' => 'MUHAMAD BULDAN ANWAR', 'kelas' => 'XII TJKT 1', 'email' => 'muhamadbuldananwar@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0240' ],
            [ 'name' => 'MUHAMAD FARIZ ARIANSYAH', 'kelas' => 'XII TJKT 1', 'email' => 'muhamadfarizariansyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0102' ],
            [ 'name' => 'MUHAMAD FAUZI', 'kelas' => 'XII TJKT 1', 'email' => 'muhamadfauzi@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0130' ],
            [ 'name' => 'MUHAMAD FEBRIANSYAH', 'kelas' => 'XII TJKT 1', 'email' => 'muhamadfebriansyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0373' ],
            [ 'name' => 'MUHAMAD IKHSANUDIN', 'kelas' => 'XII TJKT 1', 'email' => 'muhamadikhsanudin@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0175' ],
            [ 'name' => 'MUHAMAD RIZAL NUR ALAM', 'kelas' => 'XII TJKT 1', 'email' => 'muhamadrizalnuralam@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0174' ],
            [ 'name' => 'MUHAMAD ROBYANSYAH', 'kelas' => 'XII TJKT 1', 'email' => 'muhamadrobyansyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0403' ],
            [ 'name' => 'MUHAMMAD AKBAR RIZQULLAH', 'kelas' => 'XII TJKT 1', 'email' => 'muhammadakbarrizqullah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0257' ],
            [ 'name' => 'MUHAMMAD ALDIYANSYAH', 'kelas' => 'XII TJKT 1', 'email' => 'muhammadaldiyansyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0173' ],
            [ 'name' => 'MUHAMMAD AZMA FARIDDUDIN', 'kelas' => 'XII TJKT 1', 'email' => 'muhammadazmafariddudin@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0186' ],
            [ 'name' => 'MUHAMMAD HIKMAL AKMAL', 'kelas' => 'XII TJKT 1', 'email' => 'muhammadhikmalakmal@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0374' ],
            [ 'name' => 'MUHAMMAD MIFTAHUL HAETAMI', 'kelas' => 'XII TJKT 1', 'email' => 'muhammadmiftahulhaetami@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0037' ],
            [ 'name' => 'MUHAMMAD MIKAYLA ARRAFI', 'kelas' => 'XII TJKT 1', 'email' => 'muhammadmikaylaarrafi@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0031' ],
            [ 'name' => 'MUHAMMAD MUHTAR', 'kelas' => 'XII TJKT 1', 'email' => 'muhammadmuhtar@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0188' ],
            [ 'name' => 'MUHAMMAD NUHBATUL FIKAR', 'kelas' => 'XII TJKT 1', 'email' => 'muhammadnuhbatulfikar@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0121' ],
            [ 'name' => 'MUHAMMAD ROBI', 'kelas' => 'XII TJKT 1', 'email' => 'muhammadrobi@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0274' ],
            [ 'name' => 'REZA PRATAMA BAHTIAR', 'kelas' => 'XII TJKT 1', 'email' => 'rezapratamabahtiar@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0043' ],
            [ 'name' => 'RIVAL FAZRI', 'kelas' => 'XII TJKT 1', 'email' => 'rivalfazri@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0011' ],
            [ 'name' => 'WAFIQ MIFTAH FAUZAN', 'kelas' => 'XII TJKT 1', 'email' => 'wafiqmiftahfauzan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0375' ],
            [ 'name' => 'WAVA SEPTIAWAN PRATAMA', 'kelas' => 'XII TJKT 1', 'email' => 'wavaseptiawanpratama@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0018' ],
        ];

        // Looping untuk membuat setiap record User
        foreach ($data as $user) {
            User::create($user);
        }
    }
}