<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Persentase; 


class DefaultPersentase extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Persentase::count() === 0) {
            Persentase::create([
                'id' => '1', 'percentage' => 20, 'year' => 2020
                // Tambahkan kolom lainnya sesuai kebutuhan
            ]);

            Persentase::create([
                'id' => '2', 'percentage' => 20, 'year' => 2020
                // Tambahkan kolom lainnya sesuai kebutuhan
            ]);

            Persentase::create([
                'id' => '3', 'percentage' => 20, 'year' => 2020
                // Tambahkan kolom lainnya sesuai kebutuhan
            ]);

            Persentase::create([
                'id' => '4', 'percentage' => 20, 'year' => 2020
                // Tambahkan kolom lainnya sesuai kebutuhan
            ]);

            // Tambahkan data lainnya sesuai kebutuhan
        }
    }
}
