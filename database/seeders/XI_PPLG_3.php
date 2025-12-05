<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XI_PPLG_3 extends Seeder
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
            [ 'name' => 'AINI NUR HALIMAH', 'kelas' => 'XI PPLG 3', 'email' => 'aininurhalimah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0102' ],
            [ 'name' => 'ALIEF ALAFFAN', 'kelas' => 'XI PPLG 3', 'email' => 'aliefalaffan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0032' ],
            [ 'name' => 'ALYA DESTIANA', 'kelas' => 'XI PPLG 3', 'email' => 'alyadestiana@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0360' ],
            [ 'name' => 'ALYA RAMADHANI', 'kelas' => 'XI PPLG 3', 'email' => 'alyaramadhani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0091' ],
            [ 'name' => 'BINTANG PUTRA ANUGRAHA PRATAMA', 'kelas' => 'XI PPLG 3', 'email' => 'bintangputraanugrahapratama@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0071' ],
            [ 'name' => 'CARISSA HANA SAPHIRA', 'kelas' => 'XI PPLG 3', 'email' => 'carissahanasaphira@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0017' ],
            [ 'name' => 'DEDY SUNJAYA', 'kelas' => 'XI PPLG 3', 'email' => 'dedysunjaya@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0225' ],
            [ 'name' => 'DESINTA MELIANI', 'kelas' => 'XI PPLG 3', 'email' => 'desintameliani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0319' ],
            [ 'name' => 'DEVIANI MAULANI AZZAHRA', 'kelas' => 'XI PPLG 3', 'email' => 'devianimaulaniazzahra@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0400' ],
            [ 'name' => 'FADLI DWI NUGRAHA', 'kelas' => 'XI PPLG 3', 'email' => 'fadlidwinugraha@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0236' ],
            [ 'name' => 'FERDY FIRMANSYAH', 'kelas' => 'XI PPLG 3', 'email' => 'ferdyfirmansyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0200' ],
            [ 'name' => 'KEYSA JANAHTU ALVIRA', 'kelas' => 'XI PPLG 3', 'email' => 'keysajanahtualvira@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0397' ],
            [ 'name' => 'KHAIRU TAUFIQURRAHMAN', 'kelas' => 'XI PPLG 3', 'email' => 'khairutaufiqurrahman@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0145' ],
            [ 'name' => 'M IKHSAN HAFIULLAH', 'kelas' => 'XI PPLG 3', 'email' => 'mikhsanhafiullah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0222' ],
            [ 'name' => 'M. FADLAN RAMADINANSYA', 'kelas' => 'XI PPLG 3', 'email' => 'mfadlanramadinansya@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0129' ],
            [ 'name' => 'MELYNDA PUTRI RUSFIANI', 'kelas' => 'XI PPLG 3', 'email' => 'melyndaputrirusfiani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0263' ],
            [ 'name' => 'MOHAMMAD ABU RIZKI', 'kelas' => 'XI PPLG 3', 'email' => 'mohammadaburizki@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0279' ],
            [ 'name' => 'MUHAMAD APIPUDIN', 'kelas' => 'XI PPLG 3', 'email' => 'muhamadapipudin@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0133' ],
            [ 'name' => 'MUHAMAD RIFKY PUTRA HILMANSYAH', 'kelas' => 'XI PPLG 3', 'email' => 'muhamadrifkyputrahilmansyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0275' ],
            [ 'name' => 'MUHAMMAD AIRLANGGA', 'kelas' => 'XI PPLG 3', 'email' => 'muhammadairlangga@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0021' ],
            [ 'name' => 'MUHAMMAD IBNI ALZAM', 'kelas' => 'XI PPLG 3', 'email' => 'muhammadibnialzam@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0217' ],
            [ 'name' => 'MUHAMMAD IQBAL', 'kelas' => 'XI PPLG 3', 'email' => 'muhammadiqbal@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0224' ],
            [ 'name' => 'MUHAMMAD RUSLI', 'kelas' => 'XI PPLG 3', 'email' => 'muhammadrusli@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0244' ],
            [ 'name' => 'PANDU PUTRA NURASIH', 'kelas' => 'XI PPLG 3', 'email' => 'pandupputranurasih@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0330' ],
            [ 'name' => 'SALSYABILA NUR LATHIFA', 'kelas' => 'XI PPLG 3', 'email' => 'salsyabilanurlathifa@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0277' ],
            [ 'name' => 'SAQILA JASWA MAULANI', 'kelas' => 'XI PPLG 3', 'email' => 'saqilajaswamaulani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0251' ],
            [ 'name' => 'SELVIRA PUTRI RAHMAWATI', 'kelas' => 'XI PPLG 3', 'email' => 'selviraputrirahmawati@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0067' ],
            [ 'name' => 'SHOPIA AMALIA', 'kelas' => 'XI PPLG 3', 'email' => 'shopiaamalia@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0242' ],
            [ 'name' => 'SITI ATIKAH SARI', 'kelas' => 'XI PPLG 3', 'email' => 'sitiatikahsari@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0027' ],
            [ 'name' => 'SITI FANNIA FATIMAH', 'kelas' => 'XI PPLG 3', 'email' => 'sitifanniafatimah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0116' ],
            [ 'name' => 'WULAN SAYYINA', 'kelas' => 'XI PPLG 3', 'email' => 'wulansayyina@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0176' ],
            [ 'name' => 'ZILVA ZIA YULIANI', 'kelas' => 'XI PPLG 3', 'email' => 'zilvaziayuliani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0332' ],
        ];


        // Looping untuk membuat setiap record User
        foreach ($data as $user) {
            User::create($user);
        }
    }
}