<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tokoh;

class DefaultTokoh extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Tokoh::count() === 0) {
            Tokoh::create([
                'id' => '1',
                'nama_tokoh' => 'TBD',
                'foto_tokoh' => 'assets/img/team/team-1.jpg',
            ]);

            Tokoh::create([
                'id' => '2',
                'nama_tokoh' => 'TBD',
                'foto_tokoh' => 'assets/img/team/team-2.jpg'
            ]);
        }
    }
}
