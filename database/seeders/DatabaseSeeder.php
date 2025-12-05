<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            XII_PPLG_3::class,
            XII_PPLG_2::class,
            XII_PPLG_1::class,
            XII_TJKT_1::class,
            XII_TJKT_2::class,
            XII_AN::class,
            XI_PPLG_3::class,
            XI_PPLG_2::class,
            XI_PPLG_1::class,
            XI_TJKT_1::class,
            XI_TJKT_2::class,
            XI_TJKT_3::class,
            XI_AN::class,
            X_PPLG_1::class,
            X_PPLG_2::class,
            X_PPLG_3::class,
            X_TJKT_1::class,
            X_TJKT_2::class,
            X_AN::class,
            X_DKV::class,
        ]);
    }
}
