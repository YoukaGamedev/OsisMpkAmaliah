<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XI_AN extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data pengguna dari kelas XI AN (berdasarkan file Excel/CSV)
        $data = [
            [ 'name' => 'ALYANIA NURAINI', 'kelas' => 'XI AN', 'email' => 'alyanianuraini@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0314' ],
            [ 'name' => 'ALZENA RAISAH', 'kelas' => 'XI AN', 'email' => 'alzenaraisah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0066' ],
            [ 'name' => 'AMANDA RAMADHANY SUHARTO', 'kelas' => 'XI AN', 'email' => 'amandaramadhanysuharto@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0080' ],
            [ 'name' => 'AZKA AULIA', 'kelas' => 'XI AN', 'email' => 'azkaaulia@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0287' ],
            [ 'name' => 'BINTANG LEGO HARJONO', 'kelas' => 'XI AN', 'email' => 'bintanglegoharjono@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0409' ],
            [ 'name' => 'DARRELL ARSA RADINKA', 'kelas' => 'XI AN', 'email' => 'darrellarsaradinka@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0384' ],
            [ 'name' => 'DEWI ANDITA PUTRI', 'kelas' => 'XI AN', 'email' => 'dewianditaputri@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0301' ],
            [ 'name' => 'FABIAN ABDILLAH NASHRI', 'kelas' => 'XI AN', 'email' => 'fabianabdillahnashri@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0410' ],
            [ 'name' => 'FARDAN FAQIH HABIBURRAHMAN', 'kelas' => 'XI AN', 'email' => 'fardanfaqihhabiburrahman@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0347' ],
            [ 'name' => 'FRISKHA ZAHRA FERTYANZA', 'kelas' => 'XI AN', 'email' => 'friskhazahrafertyanza@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0183' ],
            [ 'name' => 'GHEA NAFITRI', 'kelas' => 'XI AN', 'email' => 'gheanafitri@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0323' ],
            [ 'name' => 'HAMZA AL ASAD', 'kelas' => 'XI AN', 'email' => 'hamzaalasad@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0132' ],
            [ 'name' => 'ILHAM SAPUTRA', 'kelas' => 'XI AN', 'email' => 'ilhamsaputra@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0095' ],
            [ 'name' => 'M NIZAR PRATAMA IRSHAN', 'kelas' => 'XI AN', 'email' => 'mnizarpratamairshan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0247' ],
            [ 'name' => 'M. RIZAL SAKINA', 'kelas' => 'XI AN', 'email' => 'mrizalsakina@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0153' ],
            [ 'name' => 'M. RIZWAN KURNIAWAN', 'kelas' => 'XI AN', 'email' => 'mrizwankurniawan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0002' ],
            [ 'name' => 'MAULANA JOOSY KAWET', 'kelas' => 'XI AN', 'email' => 'maulanajoosykawet@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0324' ],
            [ 'name' => 'MUHAMAD AGASTA RAYA AGUNG', 'kelas' => 'XI AN', 'email' => 'muhamadagastarayaagung@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0290' ],
            [ 'name' => 'MUHAMAD FAHRY RAMADHANI', 'kelas' => 'XI AN', 'email' => 'muhamadfahryramadhani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0346' ],
            [ 'name' => 'MUHAMAD FARIL AL MUIZ', 'kelas' => 'XI AN', 'email' => 'muhamadfarilalmuiz@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0051' ],
            [ 'name' => 'MUHAMMAD ADITYA ADZHARI FIRMANSYAH', 'kelas' => 'XI AN', 'email' => 'muhammadadityaadzharifirmansyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0147' ],
            [ 'name' => 'MUHAMMAD FAKHRI RIZKY ADHARI', 'kelas' => 'XI AN', 'email' => 'muhammadfakhririzkyadhari@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0373' ],
            [ 'name' => 'MUHAMMAD SYAHRIALDI UTAMA', 'kelas' => 'XI AN', 'email' => 'muhammadsyahriالdiutama@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0215' ],
            [ 'name' => 'MYIESHA AZWIYAH', 'kelas' => 'XI AN', 'email' => 'myieshaazwiyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0208' ],
            [ 'name' => 'RAFA FEBRYO DWIARIANSYAH', 'kelas' => 'XI AN', 'email' => 'rafafebryodwiariansyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0248' ],
            [ 'name' => 'RAFFA ARSYAFFIN', 'kelas' => 'XI AN', 'email' => 'raffaarsyaffin@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0142' ],
            [ 'name' => 'RAFI FATHONY ACHMAD', 'kelas' => 'XI AN', 'email' => 'rafifathonyachmad@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0216' ],
            [ 'name' => 'RAFIL SAVERIO', 'kelas' => 'XI AN', 'email' => 'rafilsaverio@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0101' ],
            [ 'name' => 'RESTU MAULID\'YA ABDZAL', 'kelas' => 'XI AN', 'email' => 'restumaulidyaabdzal@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0219' ],
            [ 'name' => 'STELLA AYU VIA MAYRES', 'kelas' => 'XI AN', 'email' => 'stellaayuviamayres@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0035' ],
            [ 'name' => 'SYARIFA BALQIS', 'kelas' => 'XI AN', 'email' => 'syarifaბალqis@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0043' ],
        ];

        // Looping untuk membuat setiap record User
        foreach ($data as $user) {
            User::create($user);
        }
    }
}