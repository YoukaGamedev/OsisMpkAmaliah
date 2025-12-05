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
            /////////// A1
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

            ////////// A2
            X_AK_1::class,
            X_AK_2::class,
            X_BR::class,
            X_DPB::class,
            X_LPS::class,
            X_MP_1::class,
            X_MP_2::class,
            X_MP_3::class,

            XI_AK::class,
            XI_BR::class,
            XI_DPB::class,
            XI_LPS::class,
            XI_MP_1::class,
            XI_MP_2::class,
            XI_MP_3::class,

            XII_AK_1::class,
            XII_AK_2::class,
            XII_BR::class,
            XII_DPB::class,
            XII_LPS::class,
            XII_MP_1::class,
            XII_MP_2::class,
            XII_MP_3::class,
        ]);
    }
}
