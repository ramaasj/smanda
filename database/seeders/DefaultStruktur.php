<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Struktur;


class DefaultStruktur extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Struktur::count() === 0) {
            Struktur::create([
                'id' => '1',
                'foto_org_sekolah' => 'assets/img/STRUKTUR-ORGANISASI-SEKOLAH-2020-2021-1536x1004.jpg',
                'desc' => '37 Tahun',
            ]);
        }
    }
}
