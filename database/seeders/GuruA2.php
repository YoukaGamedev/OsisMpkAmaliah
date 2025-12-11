<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class GuruA2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data guru A2
        $data = [
            [ 'name' => 'DR. GUGUN GUNADI', 'kelas' => 'Guru', 'email' => 'drgugungunadi@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-001' ],
            [ 'name' => 'SITI WADIAH', 'kelas' => 'Guru', 'email' => 'sitiwadiah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-002' ],
            [ 'name' => 'MILA KARMILA', 'kelas' => 'Guru', 'email' => 'milakarmila@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-003' ],
            [ 'name' => 'TRI EKAWATI', 'kelas' => 'Guru', 'email' => 'triekawati@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-004' ],
            [ 'name' => 'RENI OKTAVIANI', 'kelas' => 'Guru', 'email' => 'renioktaviani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-005' ],
            [ 'name' => 'DWI HANDAYANI', 'kelas' => 'Guru', 'email' => 'dwihandayani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-006' ],
            [ 'name' => 'YULIANTI RAMADHAN', 'kelas' => 'Guru', 'email' => 'yulianti ramadhan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-007' ],
            [ 'name' => 'RAHMI PUTRI HANDAYANI', 'kelas' => 'Guru', 'email' => 'rahmiputrihandayani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-008' ],
            [ 'name' => 'GILANG GUMILAR', 'kelas' => 'Guru', 'email' => 'gilanggumilar@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-009' ],
            [ 'name' => 'HENI NURAENI', 'kelas' => 'Guru', 'email' => 'heninuraeni@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-010' ],
            [ 'name' => 'DRA. ETI NURHAYATI', 'kelas' => 'Guru', 'email' => 'draetinurhayati@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-011' ],
            [ 'name' => 'WENNY ISMAWATI', 'kelas' => 'Guru', 'email' => 'wennyismawati@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-012' ],
            [ 'name' => 'SITI NURJANAH NASUTION', 'kelas' => 'Guru', 'email' => 'sitinurjanahnasution@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-013' ],
            [ 'name' => 'SITI AMALIAH', 'kelas' => 'Guru', 'email' => 'sitiamaliah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-014' ],
            [ 'name' => 'ELSE AS SYAVIRA', 'kelas' => 'Guru', 'email' => 'elseassyavira@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-015' ],
            [ 'name' => 'SITI SARAH MONIKA', 'kelas' => 'Guru', 'email' => 'sitisarahmonika@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-016' ],
            [ 'name' => 'MUHAMMAD SAYUTI', 'kelas' => 'Guru', 'email' => 'muhammadsayuti@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-017' ],
            [ 'name' => 'AIDINA BAREK HODA', 'kelas' => 'Guru', 'email' => 'aidinabarekhoda@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-018' ],
            [ 'name' => 'RIRIS MAURISAL JANNAH', 'kelas' => 'Guru', 'email' => 'rirismaurisaljannah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-019' ],
            [ 'name' => 'DEDE JAENUDIN', 'kelas' => 'Guru', 'email' => 'dedejaenudin@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-020' ],
            [ 'name' => 'SITI NURAFIFAH', 'kelas' => 'Guru', 'email' => 'sitinurafifah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-021' ],
            [ 'name' => 'RISMAYANTI', 'kelas' => 'Guru', 'email' => 'rismayanti@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-022' ],
            [ 'name' => 'SITI NURANISAH', 'kelas' => 'Guru', 'email' => 'sitinuranisah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-023' ],
            [ 'name' => 'AKWAL SYAHRIL', 'kelas' => 'Guru', 'email' => 'akwalsyahril@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-024' ],
            [ 'name' => 'INDRA DELTA', 'kelas' => 'Guru', 'email' => 'indradelta@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-025' ],
            [ 'name' => 'ANNISA RIANI', 'kelas' => 'Guru', 'email' => 'annisariani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-026' ],
            [ 'name' => 'SITI HERTIWI KHASANAH', 'kelas' => 'Guru', 'email' => 'sitihertiwikhsanah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-027' ],
            [ 'name' => 'SITI NUR ALFINA', 'kelas' => 'Guru', 'email' => 'sitinuralfina@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-028' ],
            [ 'name' => 'SITI SAHIDAH', 'kelas' => 'Guru', 'email' => 'sitisahidah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-029' ],
            [ 'name' => 'NIAR HANDAYANI', 'kelas' => 'Guru', 'email' => 'niarhandayani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-030' ],
            [ 'name' => 'SYLVIA RACHMAWATI', 'kelas' => 'Guru', 'email' => 'sylviarachmawati@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-031' ],
            [ 'name' => 'ZAHRA AZKIA IBRAHIM', 'kelas' => 'Guru', 'email' => 'zahraazkiaibrahim@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-032' ],
            [ 'name' => 'ANNISA', 'kelas' => 'Guru', 'email' => 'annisa@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-033' ],
            [ 'name' => 'MUHAMAD ABDUL MALIK', 'kelas' => 'Guru', 'email' => 'muhamadabdulmalik@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-034' ],
            [ 'name' => 'MULYANA', 'kelas' => 'Guru', 'email' => 'mulyana@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-035' ],
            [ 'name' => 'NURUL FEBRIANTI RAHMANISA', 'kelas' => 'Guru', 'email' => 'nurulfebrianti rahmanisa@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-036' ],
            [ 'name' => 'MUHAMMAD IJLAL FAUZI', 'kelas' => 'Guru', 'email' => 'muhammadijlalfauzi@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-037' ],
            [ 'name' => 'INTAN LESTARI CAHAYANINGTAS PRASETYO', 'kelas' => 'Guru', 'email' => 'intanlestaricahayaningtasprasetyo@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-038' ],
            [ 'name' => 'DEDI SETIANA', 'kelas' => 'Guru', 'email' => 'dedisetiana@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-039' ],
            [ 'name' => 'ARIF HIDAYAT', 'kelas' => 'Guru', 'email' => 'arifhidayat@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-040' ],
            [ 'name' => 'MUHAMAD FIKRI', 'kelas' => 'Guru', 'email' => 'muhamadfikri@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-041' ],
            [ 'name' => 'MUHAMMAD KEMAL IRFANY AZHAR', 'kelas' => 'Guru', 'email' => 'muhammadkemalirfanyazhar@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-042' ],
            [ 'name' => 'SITI MURTI DEWI', 'kelas' => 'Guru', 'email' => 'sitimurtidewi@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-043' ],
            [ 'name' => 'HERDIANA', 'kelas' => 'Guru', 'email' => 'herdiana@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-044' ],
            [ 'name' => 'SAEPULLOH', 'kelas' => 'Guru', 'email' => 'saepulloh@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-045' ],
            [ 'name' => 'NARA MEISYARANI', 'kelas' => 'Guru', 'email' => 'narameisyarani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-046' ],
            [ 'name' => 'SEPTI YULIYANI', 'kelas' => 'Guru', 'email' => 'septiyuliyani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-047' ],
            [ 'name' => 'HENDI WIJAYA', 'kelas' => 'Guru', 'email' => 'hendiwijaya@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-048' ],
            [ 'name' => 'WAHYUDI SUNARYA', 'kelas' => 'Guru', 'email' => 'wahyudisunarya@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-049' ],
            [ 'name' => 'HALIM MAHMUD', 'kelas' => 'Guru', 'email' => 'halimmahmud@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-050' ],
            [ 'name' => 'NAUFAL NAJWA AL MUGHNIY', 'kelas' => 'Guru', 'email' => 'naufalnajwaalmughniy@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-051' ],
            [ 'name' => 'SALSA SYAKIRA', 'kelas' => 'Guru', 'email' => 'salsasyakira@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-052' ],
            [ 'name' => 'FAJR MAULANA', 'kelas' => 'Guru', 'email' => 'fajrmaulana@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'Guru', 'nis' => 'A2-053' ],
        ];

        // Looping untuk membuat setiap record User
        foreach ($data as $user) {
            User::create($user);
        }
    }
}