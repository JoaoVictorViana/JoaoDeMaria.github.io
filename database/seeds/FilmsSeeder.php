<?php

use Illuminate\Database\Seeder;

class FilmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films')->insert([
            'name' => 'Garfiel',
            'actors_id' => '100030 - 12i1i23',
            'types' => json_encode(['adventure', 'family']),
            'num_visited' => 4
        ]);

        DB::table('films')->insert([
            'name' => 'Game of Thrones',
            'actors_id' => '212321 - 2222',
            'types' => json_encode(['adventure', 'action']),
            'num_visited' => 7
        ]);
        
        DB::table('films')->insert([
            'name' => 'Interestelar',
            'actors_id' => '123 - 34243',
            'types' => json_encode(['fiction', 'adventure']),
            'num_visited' => 2
        ]);
    }
}
