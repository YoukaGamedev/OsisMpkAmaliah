<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XI_TJKT_3 extends Seeder
{
    public function run()
    {
        $data = [
            [ 'nis' => '24.5.0268', 'name' => 'ARIS SETIAWAN', 'kelas' => 'XI TJKT 3', 'email' => 'arissetiawan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1' ],
            [ 'nis' => '24.5.0202', 'name' => 'ERLANGGA ATMAJAYA', 'kelas' => 'XI TJKT 3', 'email' => 'erlanggaatmajaya@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1' ],
            [ 'nis' => '24.5.0309', 'name' => 'FIKRI KHALID ARRABIH', 'kelas' => 'XI TJKT 3', 'email' => 'fikrikhalidarrabih@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1' ],
            [ 'nis' => '24.5.0414', 'name' => 'GHAZY THUFAIL AL-GHIFARI', 'kelas' => 'XI TJKT 3', 'email' => 'ghazythufailal-ghifari@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1' ],
            [ 'nis' => '24.5.0238', 'name' => 'IBRAHIM DRAJATULLAH', 'kelas' => 'XI TJKT 3', 'email' => 'ibrahdrajatullah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1' ],
            [ 'nis' => '24.5.0112', 'name' => 'JAFAR SIBARANI', 'kelas' => 'XI TJKT 3', 'email' => 'jafarsibarani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1' ],
            [ 'nis' => '24.5.0395', 'name' => 'JAYADI INDRA SUKMANA', 'kelas' => 'XI TJKT 3', 'email' => 'jayadiindrasukmana@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1' ],
            [ 'nis' => '24.5.0015', 'name' => 'M. FATHURRAHMAN WAHID', 'kelas' => 'XI TJKT 3', 'email' => 'mfathurrahmanwahid@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1' ],
            [ 'nis' => '24.5.0402', 'name' => 'M. GILANG RAMADAN', 'kelas' => 'XI TJKT 3', 'email' => 'mgilangramadan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1' ],
            [ 'nis' => '24.5.0125', 'name' => 'M.KEVIN FIRMANSYAH', 'kelas' => 'XI TJKT 3', 'email' => 'mkevinfirmansyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1' ],
            [ 'nis' => '24.5.0040', 'name' => 'MAULANA PRADIKTA', 'kelas' => 'XI TJKT 3', 'email' => 'maulanapradikta@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1' ],
            [ 'nis' => '24.5.0094', 'name' => 'MUCHAMAD FACHRI ALWI NUR', 'kelas' => 'XI TJKT 3', 'email' => 'muchamadfachrialwinur@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1' ],
            [ 'nis' => '24.5.0010', 'name' => 'MUH ALIF YASIN', 'kelas' => 'XI TJKT 3', 'email' => 'muhalifyasin@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1' ],
            [ 'nis' => '24.5.0054', 'name' => 'MUHAMAD BARA RIZQI', 'kelas' => 'XI TJKT 3', 'email' => 'muhamadbararizqi@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1' ],
            [ 'nis' => '24.5.0024', 'name' => 'MUHAMAD FARID HARTAWAN', 'kelas' => 'XI TJKT 3', 'email' => 'muhamadfaridhartawan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1' ],
            [ 'nis' => '24.5.0131', 'name' => 'MUHAMAD HENDRIANSYAH ATMOKO', 'kelas' => 'XI TJKT 3', 'email' => 'muhamadhendriansyahatmoko@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1' ],
            [ 'nis' => '24.5.0316', 'name' => 'MUHAMAD NATAN HARDIANSYAH', 'kelas' => 'XI TJKT 3', 'email' => 'muhamadnatanhardiansyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1' ],
            [ 'nis' => '24.5.0343', 'name' => 'MUHAMAD RAFLI KELVIANSYAH', 'kelas' => 'XI TJKT 3', 'email' => 'muhamadraflikelviansyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1' ],
            [ 'nis' => '24.5.0296', 'name' => 'MUHAMAD RIZKY ABDUL KHOLIK', 'kelas' => 'XI TJKT 3', 'email' => 'muhamadrizkyabdulkholik@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1' ],
            [ 'nis' => '24.5.0209', 'name' => 'MUHAMAD SAMSUL RIZKI', 'kelas' => 'XI TJKT 3', 'email' => 'muhamadsamsulrizki@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1' ],
            [ 'nis' => '24.5.0303', 'name' => "MUHAMMAD AL'AZIZIR DESTRAN SEBASTIAN", 'kelas' => 'XI TJKT 3', 'email' => 'muhammadalazizirdestransebastian@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1' ],
            [ 'nis' => '24.5.0383', 'name' => 'MUHAMMAD MARSHAL SURYA WAHAB', 'kelas' => 'XI TJKT 3', 'email' => 'muhammadmarshalsuryawahab@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1' ],
            [ 'nis' => '24.5.0084', 'name' => 'MUHAMMAD RAFI ALDIANSYAH', 'kelas' => 'XI TJKT 3', 'email' => 'muhammadrafialdiansyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1' ],
            [ 'nis' => '24.5.0028', 'name' => 'RAJATAN ADRILLA PUTRA', 'kelas' => 'XI TJKT 3', 'email' => 'rajatanadrillaputra@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1' ],
            [ 'nis' => '24.5.0151', 'name' => 'REIVAN DIO ABI PRASTAMA MAHPUDIN', 'kelas' => 'XI TJKT 3', 'email' => 'reivandioabiprastamamahpudin@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1' ],
            [ 'nis' => '24.5.0036', 'name' => 'RIFA DENHAS', 'kelas' => 'XI TJKT 3', 'email' => 'rifadenhas@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1' ],
        ];

        foreach ($data as $user) {
            User::create($user);
        }
    }
}
