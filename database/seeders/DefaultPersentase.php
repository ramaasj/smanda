<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DefaultPersentase extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('univ_home')->insert([
            ['id' => '1', 'percentage' => 20, 'year' => 2020],
            ['id' => '2', 'percentage' => 40, 'year' => 2021],
            ['id' => '3', 'percentage' => 60, 'year' => 2022],
            ['id' => '4', 'percentage' => 80, 'year' => 2023],
        ]);
    }
}
