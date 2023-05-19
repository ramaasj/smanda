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
                'id' => '1', 'title' => 'Terakreditasi A', 'desc' => 'TBD'
                // Tambahkan kolom lainnya sesuai kebutuhan
            ]);

            Points::create([
                'id' => '2', 'title' => 'Memfasilitasi', 'desc' => 'TBD'
                // Tambahkan kolom lainnya sesuai kebutuhan
            ]);

            Points::create([
                'id' => '3', 'title' => 'Mengayomi', 'desc' => 'TBD'
                // Tambahkan kolom lainnya sesuai kebutuhan
            ]);

            Points::create([
                'id' => '4', 'title' => 'Adiwiyata', 'desc' => 'TBD'
                // Tambahkan kolom lainnya sesuai kebutuhan
            ]);

            // Tambahkan data lainnya sesuai kebutuhan
        }
    }
}
