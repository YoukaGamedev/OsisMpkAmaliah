<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        // Pastikan kolom di Excel punya header yang sesuai:
        // name | email | password | role | kepengurusan | sekolah | avatar
        if (User::where('email', $row['email'])->exists()) {
        return null; // lewati baris jika email sudah ada
        }


        return new User([
            'name'          => $row['name'],
            'email'         => $row['email'],
            'password'      => Hash::make($row['password']),
            'role'          => $row['role'] ?? 'user',
            'kepengurusan'  => $row['kepengurusan'] ?? null,
            'sekolah'       => $row['sekolah'] ?? 'A1',  // default jika kosong
        ]);
    }
}
