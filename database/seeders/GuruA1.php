<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class GuruA1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data guru
        $data = [
            [ 'name' => 'TISNA SUDRAJAT', 'kelas' => 'Guru', 'email' => 'tisnasudrajat@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-001' ],
            [ 'name' => 'RD. HENDRIAWAN TANSYAH', 'kelas' => 'Guru', 'email' => 'rdhendriawantansyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-002' ],
            [ 'name' => 'AMIRUDIN MUSLIM', 'kelas' => 'Guru', 'email' => 'amirudinmuslim@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-003' ],
            [ 'name' => 'ISMA TRI PAMUNGKAS', 'kelas' => 'Guru', 'email' => 'ismatripamungkas@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-004' ],
            [ 'name' => 'ABDUL AZIS SUDRAJAT', 'kelas' => 'Guru', 'email' => 'abdulazissudrajat@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-005' ],
            [ 'name' => 'MUHAMMAD FENDRA KARI', 'kelas' => 'Guru', 'email' => 'muhammadfendrakari@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-006' ],
            [ 'name' => 'MUHAMMAD ROMDHONI', 'kelas' => 'Guru', 'email' => 'muhammadromdhoni@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-007' ],
            [ 'name' => 'SELVIA PRIHASTYANI', 'kelas' => 'Guru', 'email' => 'selviaprihastyani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-008' ],
            [ 'name' => 'SEPTYANDI UTAMA', 'kelas' => 'Guru', 'email' => 'septyandi utama@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-009' ],
            [ 'name' => 'MUHAMMAD RENDY NURMANSYAH', 'kelas' => 'Guru', 'email' => 'muhammadrendynurmansyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-010' ],
            [ 'name' => 'MUDIN', 'kelas' => 'Guru', 'email' => 'mudin@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-011' ],
            [ 'name' => 'YENI LATIFAH', 'kelas' => 'Guru', 'email' => 'yenilatifah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-012' ],
            [ 'name' => 'AMI LISTIAMI', 'kelas' => 'Guru', 'email' => 'amilistiami@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-013' ],
            [ 'name' => 'MIMI SUMIATI', 'kelas' => 'Guru', 'email' => 'mimisumiati@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-014' ],
            [ 'name' => 'ERNAWATI', 'kelas' => 'Guru', 'email' => 'ernawati@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-015' ],
            [ 'name' => 'SEPTA SOPIATUN', 'kelas' => 'Guru', 'email' => 'septasopiatun@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-016' ],
            [ 'name' => 'ANA LUCIANA', 'kelas' => 'Guru', 'email' => 'analuciana@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-017' ],
            [ 'name' => 'HADI PASITO', 'kelas' => 'Guru', 'email' => 'hadipasito@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-018' ],
            [ 'name' => 'SYAHRUL RAMDONI', 'kelas' => 'Guru', 'email' => 'syahrulramdoni@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-019' ],
            [ 'name' => 'TUTI SUSILAWATI', 'kelas' => 'Guru', 'email' => 'tutisusilawati@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-020' ],
            [ 'name' => 'YOGI AHMAD NUGRAHA', 'kelas' => 'Guru', 'email' => 'yogiahmadnugraha@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-021' ],
            [ 'name' => 'RANI OKTAVIANI', 'kelas' => 'Guru', 'email' => 'ranioktaviani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-022' ],
            [ 'name' => 'SELVIA SAFITRI', 'kelas' => 'Guru', 'email' => 'selviasafitri@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-023' ],
            [ 'name' => 'TIA AGUSTIANI', 'kelas' => 'Guru', 'email' => 'tiaagustiani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-024' ],
            [ 'name' => 'GUNA TATA PIJANA', 'kelas' => 'Guru', 'email' => 'gunatatapijana@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-025' ],
            [ 'name' => 'MUHAMMAD MUKHLISIN', 'kelas' => 'Guru', 'email' => 'muhammadmukhlisin@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-026' ],
            [ 'name' => 'OCE KOMARUDIN', 'kelas' => 'Guru', 'email' => 'ocekomarudin@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-027' ],
            [ 'name' => 'FITRI ZUHRIA FIANI', 'kelas' => 'Guru', 'email' => 'fitrizuhriafiani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-028' ],
            [ 'name' => 'IQBAL FIRDAUS', 'kelas' => 'Guru', 'email' => 'iqbalfirdaus@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-029' ],
            [ 'name' => 'AVIANI SOFIANSYAH', 'kelas' => 'Guru', 'email' => 'avianisofiansyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-030' ],
            [ 'name' => 'PUTRIANI NUR KHOTIMAH', 'kelas' => 'Guru', 'email' => 'putrianinurkhotimah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-031' ],
            [ 'name' => 'DEDEN ZAENUDIN', 'kelas' => 'Guru', 'email' => 'dedenzaenudin@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-032' ],
            [ 'name' => 'MUHAMAD SUBHAN HIDAYAT', 'kelas' => 'Guru', 'email' => 'muhamadsubhanhidayat@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-033' ],
            [ 'name' => 'RIZKY SEPTIYADI WIRAKUSUMA', 'kelas' => 'Guru', 'email' => 'rizkyseptiyadiwirakusuma@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-034' ],
            [ 'name' => 'NEYLANUR MAULIDIYAH', 'kelas' => 'Guru', 'email' => 'neylanur maulidiyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-035' ],
            [ 'name' => 'INTAN SRI MULYANI', 'kelas' => 'Guru', 'email' => 'intansrimulyani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-036' ],
            [ 'name' => 'MIFTAHUL KHOIR', 'kelas' => 'Guru', 'email' => 'miftahulkhoir@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-037' ],
            [ 'name' => 'MAMAY SUMARNI', 'kelas' => 'Guru', 'email' => 'mamaysumarni@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-038' ],
            [ 'name' => 'KHAIRUNNISA', 'kelas' => 'Guru', 'email' => 'khairunnisa@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-039' ],
            [ 'name' => 'SAHNUR MULYA', 'kelas' => 'Guru', 'email' => 'sahnurmulya@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-040' ],
            [ 'name' => 'MUHAMMAD YASIR', 'kelas' => 'Guru', 'email' => 'muhammadyasir@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-041' ],
            [ 'name' => 'JAPAR SODIK', 'kelas' => 'Guru', 'email' => 'japarsodik@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-042' ],
            [ 'name' => 'ALDINO OGI', 'kelas' => 'Guru', 'email' => 'aldinoogi@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-043' ],
            [ 'name' => 'IIS ASIYAH', 'kelas' => 'Guru', 'email' => 'iisasiyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-044' ],
            [ 'name' => 'GIZWINANDA RACHMAWATI', 'kelas' => 'Guru', 'email' => 'gizwinandarachmawati@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-045' ],
            [ 'name' => 'SITI NABILAH', 'kelas' => 'Guru', 'email' => 'sitinabilah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-046' ],
            [ 'name' => 'AJANG ARIF', 'kelas' => 'Guru', 'email' => 'ajangarif@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-047' ],
            [ 'name' => 'YUDISTIRA PRATAMA ARISTIAWAN', 'kelas' => 'Guru', 'email' => 'yudistirapratamaaristiawan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-048' ],
            [ 'name' => 'ASEP ENDANG', 'kelas' => 'Guru', 'email' => 'asependang@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-049' ],
            [ 'name' => 'YANA SURYANA', 'kelas' => 'Guru', 'email' => 'yanasuryana@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-050' ],
            [ 'name' => 'MOCHAMAD RIDWAN RAMADHANI', 'kelas' => 'Guru', 'email' => 'mochamadridwanramadhani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-051' ],
            [ 'name' => 'SITI LESTARI MAULIDINA', 'kelas' => 'Guru', 'email' => 'sitilestarimaulidina@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-052' ],
            [ 'name' => 'HOERUDIN', 'kelas' => 'Guru', 'email' => 'hoerudin@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-053' ],
            [ 'name' => 'RIDWAN SAPUTRA', 'kelas' => 'Guru', 'email' => 'ridwansaputra@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-054' ],
            [ 'name' => 'INDAH SYLVIANA GUNAWAN', 'kelas' => 'Guru', 'email' => 'indahsylvianagunawan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A1-055' ],
        ];

        // Looping untuk membuat setiap record User
        foreach ($data as $user) {
            User::create($user);
        }
    }
}