<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XII_AN extends Seeder
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
            [ 'name' => 'ACHMAD KHALID MESHAL', 'kelas' => 'XII AN', 'email' => 'achmadkhalidmeshal@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0262' ],
            [ 'name' => 'AGISKA SHANIA RACHMAN', 'kelas' => 'XII AN', 'email' => 'agiskashaniarachman@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0076' ],
            [ 'name' => 'ALDI PARI FAWADJAL', 'kelas' => 'XII AN', 'email' => 'aldiparifawadjal@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0201' ],
            [ 'name' => 'ARIA BAGJA MAULANA', 'kelas' => 'XII AN', 'email' => 'ariabagјamaulana@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0057' ],
            [ 'name' => 'ARIEFA RAUHANAYA OEHLERS', 'kelas' => 'XII AN', 'email' => 'ariefarauhanayaoehlers@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0371' ],
            [ 'name' => 'AUREL PUTRI FIANDA', 'kelas' => 'XII AN', 'email' => 'aurelputrifianda@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0264' ],
            [ 'name' => 'AYSEL ABHISALY UMAM', 'kelas' => 'XII AN', 'email' => 'ayselabhisalyumam@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0284' ],
            [ 'name' => 'DIMAS ARIA NUGRAHA', 'kelas' => 'XII AN', 'email' => 'dimasarianugraha@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0346' ],
            [ 'name' => 'JAHROTU SITA', 'kelas' => 'XII AN', 'email' => 'jahrotusita@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0034' ],
            [ 'name' => 'JIBRIL RUDIAT', 'kelas' => 'XII AN', 'email' => 'jibrilrudiat@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0247' ],
            [ 'name' => 'MAULANA IKSAN', 'kelas' => 'XII AN', 'email' => 'maulanaiksan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0150' ],
            [ 'name' => 'MUHAMAD ALFAREIL FEBRIYAN HARIZKIE', 'kelas' => 'XII AN', 'email' => 'muhamadalfareilfebriyanharizkie@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0069' ],
            [ 'name' => 'MUHAMAD ANDRA VIRGIAWAN', 'kelas' => 'XII AN', 'email' => 'muhamadandravirgiawan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0350' ],
            [ 'name' => 'MUHAMAD FAJRI HERMAWAN', 'kelas' => 'XII AN', 'email' => 'muhamadfajrihermawan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0387' ],
            [ 'name' => 'MUHAMAD FEBRIANSYAH PRATAMA', 'kelas' => 'XII AN', 'email' => 'muhamadfebriansyahpratama@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0210' ],
            [ 'name' => 'MUHAMAD FIRDAN', 'kelas' => 'XII AN', 'email' => 'muhamadfirdan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0256' ],
            [ 'name' => 'MUHAMAD ILHAM FATHURAHMAN', 'kelas' => 'XII AN', 'email' => 'muhamadilhamfathurahman@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0296' ],
            [ 'name' => 'MUHAMAD TRISTAN', 'kelas' => 'XII AN', 'email' => 'muhamadtristan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0155' ],
            [ 'name' => 'MUHAMAD WISTARA RENDRA', 'kelas' => 'XII AN', 'email' => 'muhamadwistararendra@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0347' ],
            [ 'name' => 'MUHAMMAD BAGAS AR-RIZKY', 'kelas' => 'XII AN', 'email' => 'muhammadbagasarrizky@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0207' ],
            [ 'name' => 'MUHAMMAD REYHAN AZIZ', 'kelas' => 'XII AN', 'email' => 'muhammadرeyhanaziz@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0260' ],
            [ 'name' => 'MUHAMMAD REYHAN PADILAH', 'kelas' => 'XII AN', 'email' => 'muhammadرeyhanpadilah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0276' ],
            [ 'name' => 'MUHAMMAD ZIDAN FIRDAUS', 'kelas' => 'XII AN', 'email' => 'muhammadzidanfirdaus@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0010' ],
            [ 'name' => 'NADHILA MEIRIZKI NUGROHO', 'kelas' => 'XII AN', 'email' => 'nadhilameirizkinugroho@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0388' ],
            [ 'name' => 'RISKY MAULANA SAPUTRA', 'kelas' => 'XII AN', 'email' => 'riskymaulanasaputra@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0389' ],
            [ 'name' => 'SITI NAZIA AULIA', 'kelas' => 'XII AN', 'email' => 'sitinaziaaulia@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0140' ],
            [ 'name' => 'SITI ROBIAH ADAWIYAH', 'kelas' => 'XII AN', 'email' => 'sitirobiאhadawiyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0026' ],
            [ 'name' => 'SUTAN FATIR RESTU AJI', 'kelas' => 'XII AN', 'email' => 'sutanfatirrestuaji@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0390' ],
            [ 'name' => 'SYAHNAZ ZAHRA AYU', 'kelas' => 'XII AN', 'email' => 'syahnazzahraayu@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0167' ],
            [ 'name' => 'THYARA NUR RAFA', 'kelas' => 'XII AN', 'email' => 'thyaranurrafa@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0089' ],
            [ 'name' => 'ZASKIA RAMADANDRI PUTRI', 'kelas' => 'XII AN', 'email' => 'zaskiaramadandriputri@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0331' ],
        ];

        // Looping untuk membuat setiap record User
        foreach ($data as $user) {
            User::create($user);
        }
    }
}