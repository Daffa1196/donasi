<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CampaignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('campaigns')->insert([
            [
                'title' => 'Bantu Korban Banjir',
                'description' => 'Penggalangan dana untuk korban banjir.',
                'target_donation' => 10000000,
                'current_donation' => 2500000,
                'deadline' => '2026-12-31',
                'image' => 'banjir.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Donasi Pendidikan',
                'description' => 'Membantu biaya pendidikan anak kurang mampu.',
                'target_donation' => 15000000,
                'current_donation' => 5000000,
                'deadline' => '2026-11-30',
                'image' => 'pendidikan.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}