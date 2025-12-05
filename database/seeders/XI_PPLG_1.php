<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XI_PPLG_1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data pengguna dari kelas XI PPLG 1
        $data = [
            [ 'name' => 'AHMADINEJAD BANYU RIZKY', 'kelas' => 'XI PPLG 1', 'email' => 'ahmadinejadbanyurizky@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0073' ],
            [ 'name' => 'AIDIL AKBAR', 'kelas' => 'XI PPLG 1', 'email' => 'aidilakbar@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0141' ],
            [ 'name' => 'AQUILLIA PUTRI TERPILIH RAHMADILLAH', 'kelas' => 'XI PPLG 1', 'email' => 'aquilliaputriterpilihrahmadillah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0260' ],
            [ 'name' => 'ARYA NUGRAHA PRATAMA RUSLAN', 'kelas' => 'XI PPLG 1', 'email' => 'aryanugrahapratamaruslan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0005' ],
            [ 'name' => 'BIMO SAPUTRO', 'kelas' => 'XI PPLG 1', 'email' => 'bimosaputro@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0412' ],
            [ 'name' => 'DITO ARKHAN ARAFFI', 'kelas' => 'XI PPLG 1', 'email' => 'ditoarkhanaraffi@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0165' ],
            [ 'name' => 'FAQIH ALWANNUDIN', 'kelas' => 'XI PPLG 1', 'email' => 'faqihalwannudin@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0134' ],
            [ 'name' => 'FATHIR SURYA WIJAYA', 'kelas' => 'XI PPLG 1', 'email' => 'fathirsuryawijaya@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0075' ],
            [ 'name' => 'HABIBI ASKA PERMANA', 'kelas' => 'XI PPLG 1', 'email' => 'habibiaskapermana@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0123' ],
            [ 'name' => 'HANAN NURANISA UMAR JAWAS', 'kelas' => 'XI PPLG 1', 'email' => 'hanannuranisaumarjawas@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0299' ],
            [ 'name' => 'IBRAHIM MAULUDI HABIBI', 'kelas' => 'XI PPLG 1', 'email' => 'ibrahimmauludihabibi@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0117' ],
            [ 'name' => 'JUAN HARTONO', 'kelas' => 'XI PPLG 1', 'email' => 'juanhartono@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0061' ],
            [ 'name' => 'KEISYA SALAMATU ZAHRA', 'kelas' => 'XI PPLG 1', 'email' => 'keisyasalamatuzahra@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0048' ],
            [ 'name' => 'M ABDUL FALAH', 'kelas' => 'XI PPLG 1', 'email' => 'mabdulfalah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0180' ],
            [ 'name' => 'MAGIED AQILAN YAZKURNIZA', 'kelas' => 'XI PPLG 1', 'email' => 'magiedaqilanyazkurniza@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0086' ],
            [ 'name' => 'MAHFUZA ZAHIRAH', 'kelas' => 'XI PPLG 1', 'email' => 'mahfuzazahirah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0394' ],
            [ 'name' => 'MOCH. PUTRA HARDIAT', 'kelas' => 'XI PPLG 1', 'email' => 'mochputrahardiat@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0178' ],
            [ 'name' => 'MUAMAR KHADAFI AL-GHAZALI', 'kelas' => 'XI PPLG 1', 'email' => 'muamarkhadafialghazali@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0286' ],
            [ 'name' => 'MUHAMAD DAVIN ILHAM MUJIWAN', 'kelas' => 'XI PPLG 1', 'email' => 'muhamaddavinilhammujiwan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0083' ],
            [ 'name' => 'MUHAMAD FAIZ BAYU PRATAMA', 'kelas' => 'XI PPLG 1', 'email' => 'muhamadfaizbayupratama@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0114' ],
            [ 'name' => 'MUHAMAD IKWAL ALDIANSYAH', 'kelas' => 'XI PPLG 1', 'email' => 'muhamadikwalaldiansyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0033' ],
            [ 'name' => 'MUHAMAD ILHAM FEBRIANTO', 'kelas' => 'XI PPLG 1', 'email' => 'muhamadilhamfebrianto@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0185' ],
            [ 'name' => 'MUHAMAD REVAN ARISTA', 'kelas' => 'XI PPLG 1', 'email' => 'muhamadrevanarista@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0078' ],
            [ 'name' => 'MUHAMAD REYHAN ARDIANSYAH', 'kelas' => 'XI PPLG 1', 'email' => 'muhamadreyharardiansyah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0092' ],
            [ 'name' => 'MUHAMMAD IQBAL NASRULLAH', 'kelas' => 'XI PPLG 1', 'email' => 'muhammadiqbalnasrullah@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0235' ],
            [ 'name' => 'MUHAMMAD MALIK FAJAR', 'kelas' => 'XI PPLG 1', 'email' => 'muhammadmalikfajar@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0127' ],
            [ 'name' => 'MUHAMMAD ZEIN IRFAN ATTHARIQUE', 'kelas' => 'XI PPLG 1', 'email' => 'muhammadzeinirfanattharique@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0233' ],
            [ 'name' => 'PANDU RESTU PRIANTO', 'kelas' => 'XI PPLG 1', 'email' => 'pandurestuprianto@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0401' ],
            [ 'name' => 'QALBI SABDA RABBANI', 'kelas' => 'XI PPLG 1', 'email' => 'qalbisabdarabbani@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0241' ],
            [ 'name' => 'RIFKY HILMAWAN', 'kelas' => 'XI PPLG 1', 'email' => 'rifkyhilmawan@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0118' ],
            [ 'name' => 'RIZKY PUTRA HADIATAMA', 'kelas' => 'XI PPLG 1', 'email' => 'rizkyputrahadiatama@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0302' ],
            [ 'name' => 'ZAVIER ALDEN RADITYA', 'kelas' => 'XI PPLG 1', 'email' => 'zavieraldenraditya@gmail.com', 'password' => Hash::make('123456789'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '24.5.0326' ],
        ];

        // Looping untuk membuat setiap record User
        foreach ($data as $user) {
            User::create($user);
        }
    }
}