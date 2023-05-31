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
                'foto_org_sekolah' => 'https://lh3.googleusercontent.com/drive-viewer/AFGJ81rZqDCQ0JXTmDIxAeEfM5Yb3weXtxF6_Vc0zSTLzt61-u6CaXTAhVcSr_sPMFbN33p4-RFe-vHt2Se4uyKkOolpHEAF=s1600',
                'desc' => '37 Tahun',
            ]);
        }
    }
}
