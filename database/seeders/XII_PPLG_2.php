<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XII_PPLG_2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data pengguna dari kelas XII PPLG 2 (berdasarkan file Excel/CSV)
        $data = [
            [ 'name' => 'AFTORI YUSUF HAIRUCAHYA', 'kelas' => 'XII PPLG 2', 'email' => 'aftoriyusufhairucahya@gmail.com', 'password' => Hash::make('12345678'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0182' ],
            [ 'name' => 'ALDIS YUDISTIRA', 'kelas' => 'XII PPLG 2', 'email' => 'aldisyudistira@gmail.com', 'password' => Hash::make('12345678'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0306' ],
            [ 'name' => 'ANGELINA PRATIWI', 'kelas' => 'XII PPLG 2', 'email' => 'angelinapratiwi@gmail.com', 'password' => Hash::make('12345678'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0099' ],
            [ 'name' => 'ARSYI RUDIYAT', 'kelas' => 'XII PPLG 2', 'email' => 'arsyirudiyat@gmail.com', 'password' => Hash::make('12345678'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0244' ],
            [ 'name' => 'ATHALA SHAKILARASKA', 'kelas' => 'XII PPLG 2', 'email' => 'athalashakilaraska@gmail.com', 'password' => Hash::make('12345678'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0361' ],
            [ 'name' => 'AUZAN ALFIN RAHMAN', 'kelas' => 'XII PPLG 2', 'email' => 'auzanalfinrahman@gmail.com', 'password' => Hash::make('12345678'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0246' ],
            [ 'name' => 'AVRIL REZKYA AMANDA', 'kelas' => 'XII PPLG 2', 'email' => 'avrilrezkyaamanda@gmail.com', 'password' => Hash::make('12345678'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0219' ],
            [ 'name' => 'BURDAHUMA', 'kelas' => 'XII PPLG 2', 'email' => 'burdahuma@gmail.com', 'password' => Hash::make('12345678'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0016' ],
            [ 'name' => 'FACHRI ZAMAL', 'kelas' => 'XII PPLG 2', 'email' => 'fachrizamal@gmail.com', 'password' => Hash::make('12345678'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0002' ],
            [ 'name' => 'ILHAM DESQI WARDANA', 'kelas' => 'XII PPLG 2', 'email' => 'ilhamdesqiwardana@gmail.com', 'password' => Hash::make('12345678'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0105' ],
            [ 'name' => 'KAYLA NAFEZA RAMADHANTI', 'kelas' => 'XII PPLG 2', 'email' => 'kaylanafezaramadhanti@gmail.com', 'password' => Hash::make('12345678'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0047' ],
            [ 'name' => 'M. ILHAM RAI\' SUBAGJA', 'kelas' => 'XII PPLG 2', 'email' => 'milhamraisubagja@gmail.com', 'password' => Hash::make('12345678'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0317' ],
            [ 'name' => 'MOHAMAD SYEH RIZAN', 'kelas' => 'XII PPLG 2', 'email' => 'mohamadsyehrizan@gmail.com', 'password' => Hash::make('12345678'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0053' ],
            [ 'name' => 'MUHAMAD AZI SAPUTRA SURYADI', 'kelas' => 'XII PPLG 2', 'email' => 'muhamadazisaputrasuryadi@gmail.com', 'password' => Hash::make('12345678'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0023' ],
            [ 'name' => 'MUHAMAD FAREL RAMADANI', 'kelas' => 'XII PPLG 2', 'email' => 'muhamadfarelramadani@gmail.com', 'password' => Hash::make('12345678'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0312' ],
            [ 'name' => 'MUHAMAD FITRAH PUTRA KOMARUDIN', 'kelas' => 'XII PPLG 2', 'email' => 'muhamadfitrahputrakomarudin@gmail.com', 'password' => Hash::make('12345678'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0377' ],
            [ 'name' => 'MUHAMAD HARDI', 'kelas' => 'XII PPLG 2', 'email' => 'muhamadhardi@gmail.com', 'password' => Hash::make('12345678'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0132' ],
            [ 'name' => 'MUHAMAD INDRA SYAHDAN', 'kelas' => 'XII PPLG 2', 'email' => 'muhamadindrasayahdan@gmail.com', 'password' => Hash::make('12345678'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0056' ],
            [ 'name' => 'MUHAMMAD FABIAN DWI SYAHPUTRA', 'kelas' => 'XII PPLG 2', 'email' => 'muhammadfabiandwisyahputra@gmail.com', 'password' => Hash::make('12345678'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0358' ],
            [ 'name' => 'MUHAMMAD FAKHRIL AL PARRAS', 'kelas' => 'XII PPLG 2', 'email' => 'muhammadfakhrilalparras@gmail.com', 'password' => Hash::make('12345678'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0187' ],
            [ 'name' => 'MUHAMMAD SIDQI AL HUWAIDI HARAHAP', 'kelas' => 'XII PPLG 2', 'email' => 'muhammadsidqialhuwaidiharahap@gmail.com', 'password' => Hash::make('12345678'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0332' ],
            [ 'name' => 'NAYYARA PUTRI ZAFIRA', 'kelas' => 'XII PPLG 2', 'email' => 'nayyaraputrizafira@gmail.com', 'password' => Hash::make('12345678'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0380' ],
            [ 'name' => 'NAZWA GISELIA SANTOSO', 'kelas' => 'XII PPLG 2', 'email' => 'nazwagiselisantoso@gmail.com', 'password' => Hash::make('12345678'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0006' ],
            [ 'name' => 'RAYYA FAWUZIYYAH', 'kelas' => 'XII PPLG 2', 'email' => 'rayyafawuziyyah@gmail.com', 'password' => Hash::make('12345678'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0385' ],
            [ 'name' => 'RIZKY RAMADHAN', 'kelas' => 'XII PPLG 2', 'email' => 'rizkyramadhan@gmail.com', 'password' => Hash::make('12345678'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0364' ],
            [ 'name' => 'SHAFWAN RIZIQ BAWAZIER', 'kelas' => 'XII PPLG 2', 'email' => 'shafwanriziqbawazier@gmail.com', 'password' => Hash::make('12345678'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0386' ],
            [ 'name' => 'SYAHRUL RIZAL', 'kelas' => 'XII PPLG 2', 'email' => 'syahrulrizal@gmail.com', 'password' => Hash::make('12345678'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0261' ],
            [ 'name' => 'YUDHIESTYA PRATAMA', 'kelas' => 'XII PPLG 2', 'email' => 'yudhiestyapratama@gmail.com', 'password' => Hash::make('12345678'), 'role' => 'user', 'sekolah' => 'A1', 'nis' => '23.5.0299' ],
        ];

        // Looping untuk membuat setiap record User
        foreach ($data as $user) {
            User::create($user);
        }
    }
}