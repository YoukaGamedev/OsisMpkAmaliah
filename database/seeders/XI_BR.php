<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XI_BR extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data pengguna dari kelas XI BR
        $data = [
            [ 'name' => 'ADAM MALIK AKMALRULLAH', 'kelas' => 'XI BR', 'email' => 'adammmalikakmalrullah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0318' ],
            [ 'name' => 'ALFARO VELDA PUTRA SHANI', 'kelas' => 'XI BR', 'email' => 'alfaroveldaputrashani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0149' ],
            [ 'name' => 'ANINDYA CAHYA KUSUMAH', 'kelas' => 'XI BR', 'email' => 'anindyacahyakusumah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0113' ],
            [ 'name' => 'ARKHAN RIZKY RAMADHAN', 'kelas' => 'XI BR', 'email' => 'arkhanrizkyramadhan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0356' ],
            [ 'name' => 'DWI PUTRI SUKMAWATI', 'kelas' => 'XI BR', 'email' => 'dwiputrisukmawati@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0179' ],
            [ 'name' => 'ERNA DWI LESTARI', 'kelas' => 'XI BR', 'email' => 'ernadwilestari@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0404' ],
            [ 'name' => 'FAHRI ISMAIL', 'kelas' => 'XI BR', 'email' => 'fahriismail@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0350' ],
            [ 'name' => 'HAYKAL AKBAR SYABANI', 'kelas' => 'XI BR', 'email' => 'haykalakbarsyabani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0372' ],
            [ 'name' => 'LAURA CLAUDYA ANINDYRA', 'kelas' => 'XI BR', 'email' => 'lauraclaudyaanindyra@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0407' ],
            [ 'name' => 'LISNA NURFAZIA ULFA', 'kelas' => 'XI BR', 'email' => 'lisnanurfaziaulfa@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0338' ],
            [ 'name' => 'MOHAMAD DIRJASUYUTIISKI', 'kelas' => 'XI BR', 'email' => 'mohamaddirjasuyutiiski@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0348' ],
            [ 'name' => 'MUHAMAD HERU', 'kelas' => 'XI BR', 'email' => 'muhamadheru@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0170' ],
            [ 'name' => 'MUHAMAD LUTHFI IRWANSYAH', 'kelas' => 'XI BR', 'email' => 'muhamadluthfiirwansyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0020' ],
            [ 'name' => 'MUHAMMAD IRHAM MAULANA A', 'kelas' => 'XI BR', 'email' => 'muhammadirhammmaulanaa@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0229' ],
            [ 'name' => 'NATASYA AULIA DESTIANI', 'kelas' => 'XI BR', 'email' => 'natasyaauliadestiani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0311' ],
            [ 'name' => 'NUR RASKA FAUZIYAH', 'kelas' => 'XI BR', 'email' => 'nurraskafauziyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0418' ],
            [ 'name' => 'RADITYA GUSTI PRAMANA', 'kelas' => 'XI BR', 'email' => 'radityagustipramana@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0026' ],
            [ 'name' => 'RIFKI MAULANA', 'kelas' => 'XI BR', 'email' => 'rifkimaulana2@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0193' ],
            [ 'name' => 'SHERIN DESTIANA ANJANI', 'kelas' => 'XI BR', 'email' => 'sherinddestianaanjani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0063' ],
            [ 'name' => 'SHIRAZ ARDHANA', 'kelas' => 'XI BR', 'email' => 'shirazardhana@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0212' ],
            [ 'name' => 'TSALSABILA SITI JANATHA', 'kelas' => 'XI BR', 'email' => 'tsalsabilasitijanatha@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0333' ],
            [ 'name' => 'YASMIN', 'kelas' => 'XI BR', 'email' => 'yasmin@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0320' ],
            [ 'name' => 'ZASKIA AULIA PUTRI HERMANSYAH', 'kelas' => 'XI BR', 'email' => 'zaskiaauliaputrihermansyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A2', 'nis' => '24.6.0052' ],
        ];

        // Looping untuk membuat setiap record User
        foreach ($data as $user) {
            User::create($user);
        }
    }
}