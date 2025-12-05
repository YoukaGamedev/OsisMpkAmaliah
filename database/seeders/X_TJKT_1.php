<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class X_TJKT_1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data pengguna dari kelas X TJKT 1 (berdasarkan file Excel/CSV)
        $data = [
            [ 'name' => 'ABDUL HARIS', 'kelas' => 'X TJKT 1', 'email' => 'abdulharis@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0087' ],
            [ 'name' => 'AGNAS JEVAN MIKO', 'kelas' => 'X TJKT 1', 'email' => 'agnasjevanmiko@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0011' ],
            [ 'name' => 'AHMAD FACHRY RAMDANI', 'kelas' => 'X TJKT 1', 'email' => 'ahmadfachryramdani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0052' ],
            [ 'name' => 'ALFIAN SUSILO', 'kelas' => 'X TJKT 1', 'email' => 'alfiansusilo@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0180' ],
            [ 'name' => 'ARGYA PUTRA WIDYANTARA', 'kelas' => 'X TJKT 1', 'email' => 'argyaputrawidyantara@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0241' ],
            [ 'name' => 'DAEFULLAH NAZMI SAJID', 'kelas' => 'X TJKT 1', 'email' => 'daefullahnაzმisajid@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0215' ],
            [ 'name' => 'DEVAN AL GHIFARI', 'kelas' => 'X TJKT 1', 'email' => 'devanalghifari@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0130' ],
            [ 'name' => 'DZAKI ZOLA ALBANI', 'kelas' => 'X TJKT 1', 'email' => 'dzakizolaalbani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0348' ],
            [ 'name' => 'FERDIAN APRILIANO', 'kelas' => 'X TJKT 1', 'email' => 'ferdianapriliano@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0291' ],
            [ 'name' => 'M FAJAR ALI HAMZAH', 'kelas' => 'X TJKT 1', 'email' => 'mfajaralihamzah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0355' ],
            [ 'name' => 'M REZA PRATAMA', 'kelas' => 'X TJKT 1', 'email' => 'mrezapratama@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0202' ],
            [ 'name' => 'M. TRISTANSYAH', 'kelas' => 'X TJKT 1', 'email' => 'mtristansyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0337' ],
            [ 'name' => 'MOHAMMAD FADIL YASIN', 'kelas' => 'X TJKT 1', 'email' => 'mohammadfadilyasin@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0235' ],
            [ 'name' => 'MUHAMAD ADRIAN SYAPUTRA', 'kelas' => 'X TJKT 1', 'email' => 'muhamadadriansyaputra@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0153' ],
            [ 'name' => 'MUHAMAD ALIF FERDIAN', 'kelas' => 'X TJKT 1', 'email' => 'muhamadalifferdian@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0156' ],
            [ 'name' => 'MUHAMAD EFVRIL MAULANA', 'kelas' => 'X TJKT 1', 'email' => 'muhamաdefvrilmaulana@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0026' ],
            [ 'name' => 'MUHAMAD IBNU ABDILLAH', 'kelas' => 'X TJKT 1', 'email' => 'muhamadibnuabdillah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0197' ],
            [ 'name' => 'MUHAMAD IBRAHIM', 'kelas' => 'X TJKT 1', 'email' => 'muhamadibrahim@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0028' ],
            [ 'name' => 'MUHAMAD MARSEL', 'kelas' => 'X TJKT 1', 'email' => 'muhamadmarsel@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0136' ],
            [ 'name' => 'MUHAMAD MARWAN RAMDAN', 'kelas' => 'X TJKT 1', 'email' => 'muhamadmarwanramdan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0191' ],
            [ 'name' => 'MUHAMAD PRAYOGA PUTRA PRATAMA', 'kelas' => 'X TJKT 1', 'email' => 'muhamadprayogaputrapratama@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0266' ],
            [ 'name' => 'MUHAMAD RIFAN', 'kelas' => 'X TJKT 1', 'email' => 'muhamadrifan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0016' ],
            [ 'name' => 'MUHAMAD ZIKRY NUGRAHA', 'kelas' => 'X TJKT 1', 'email' => 'muhamadzikrynugraha@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0168' ],
            [ 'name' => 'MUHAMMAD FACHRI FADZILAH', 'kelas' => 'X TJKT 1', 'email' => 'muhammadfachrifadzilah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0363' ],
            [ 'name' => 'MUHAMMAD KHAIRIL RAMADAN', 'kelas' => 'X TJKT 1', 'email' => 'muhammadkhairilramadan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0249' ],
            [ 'name' => 'MUHAMMAD RAFKA ARDIANSYAH', 'kelas' => 'X TJKT 1', 'email' => 'muhammadrafkaardiansyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0264' ],
            [ 'name' => 'NOVAL JINDAN SYIS', 'kelas' => 'X TJKT 1', 'email' => 'novaljindansyis@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0072' ],
            [ 'name' => 'RAIS SENJANA', 'kelas' => 'X TJKT 1', 'email' => 'raissenjana@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0369' ],
            [ 'name' => 'RAPKA ALPARIZKI', 'kelas' => 'X TJKT 1', 'email' => 'rapkaalparizki@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0142' ],
            [ 'name' => 'RESKI ADLI RAMADAN', 'kelas' => 'X TJKT 1', 'email' => 'reskiadliramadan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0196' ],
            [ 'name' => 'REZKY FAIRUZ NOOR ARIFIN', 'kelas' => 'X TJKT 1', 'email' => 'rezkyfairuznoorarifin@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0150' ],
            [ 'name' => 'RISA LUTPIAH', 'kelas' => 'X TJKT 1', 'email' => 'risalutpiah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0283' ],
            [ 'name' => 'SHELFO CLYNSI', 'kelas' => 'X TJKT 1', 'email' => 'shelfoclynsi@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0041' ],
            [ 'name' => 'TANAYA ROFIFAH', 'kelas' => 'X TJKT 1', 'email' => 'tanayarofifah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0341' ],
            [ 'name' => 'ZULFA RAHMA ANDINI', 'kelas' => 'X TJKT 1', 'email' => 'zulfarahmaandini@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '25.5.0270' ],
        ];

        // Looping untuk membuat setiap record User
        foreach ($data as $user) {
            User::create($user);
        }
    }
}