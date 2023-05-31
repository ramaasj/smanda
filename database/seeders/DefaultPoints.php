<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Points;


class DefaultPoints extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Points::count() === 0) {
            Points::create([
                'id' => '1', 'title' => 'Terakreditasi A', 'desc' => 'TBD', 'foto_point' => 'https://lh3.googleusercontent.com/drive-viewer/AFGJ81rZqDCQ0JXTmDIxAeEfM5Yb3weXtxF6_Vc0zSTLzt61-u6CaXTAhVcSr_sPMFbN33p4-RFe-vHt2Se4uyKkOolpHEAF=s1600'
                // Tambahkan kolom lainnya sesuai kebutuhan
            ]);

            Points::create([
                'id' => '2', 'title' => 'Memfasilitasi', 'desc' => 'TBD', 'foto_point' => 'https://lh3.googleusercontent.com/drive-viewer/AFGJ81rZqDCQ0JXTmDIxAeEfM5Yb3weXtxF6_Vc0zSTLzt61-u6CaXTAhVcSr_sPMFbN33p4-RFe-vHt2Se4uyKkOolpHEAF=s1600'
                // Tambahkan kolom lainnya sesuai kebutuhan
            ]);

            Points::create([
                'id' => '3', 'title' => 'Mengayomi', 'desc' => 'TBD', 'foto_point' => 'https://lh3.googleusercontent.com/drive-viewer/AFGJ81rZqDCQ0JXTmDIxAeEfM5Yb3weXtxF6_Vc0zSTLzt61-u6CaXTAhVcSr_sPMFbN33p4-RFe-vHt2Se4uyKkOolpHEAF=s1600'
                // Tambahkan kolom lainnya sesuai kebutuhan
            ]);

            Points::create([
                'id' => '4', 'title' => 'Adiwiyata', 'desc' => 'TBD', 'foto_point' => 'https://lh3.googleusercontent.com/drive-viewer/AFGJ81rZqDCQ0JXTmDIxAeEfM5Yb3weXtxF6_Vc0zSTLzt61-u6CaXTAhVcSr_sPMFbN33p4-RFe-vHt2Se4uyKkOolpHEAF=s1600'
                // Tambahkan kolom lainnya sesuai kebutuhan
            ]);

            // Tambahkan data lainnya sesuai kebutuhan
        }
    }
}
