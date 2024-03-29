<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Greet;


class DefaultGreet extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Greet::count() === 0) {
            Greet::create([
                'id' => '1',
                'gambar_greet' => 'https://lh3.googleusercontent.com/drive-viewer/AFGJ81rZqDCQ0JXTmDIxAeEfM5Yb3weXtxF6_Vc0zSTLzt61-u6CaXTAhVcSr_sPMFbN33p4-RFe-vHt2Se4uyKkOolpHEAF=s1600',
                'tahun_greet' => '37 Tahun',
                'desc_tahun' => 'SMA Negeri 2 Sidoarjo didirikan pada tahun 1986, tidak terasa sudah 37 tahun berlalu.',
                'siswa_greet' => '1289 Siswa Aktif',
                'desc_siswa' => 'Terdiri dari 1289 siswa aktif yang tersebar dalam Kelas X-XI-XII.',
                'pendidik_greet' => '64 Tenaga Kependidikan',
                'desc_pendidik' => 'Pendidikan adalah hal yang terpenting, oleh karena itu kami mempunyai Tenaga Kependidikan yang luar biasa.'
            ]);
        }
    }
}
