<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class WerktijdenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('werktijden')->insert([
            'id' => 1,
            'user_id' => 1, 
            'begin_shift' => '30-06-2021 15:14:36',
            'einde_shift' => '30-06-2021 20:15:00',
            'inLaravelDB' => 1
        ]);

        DB::table('werktijden')->insert([
            'id' => 2,
            'user_id' => 1, 
            'begin_shift' => '05-07-2021 08:01:36',
            'einde_shift' => '05-07-2021 20:15:02',
            'inLaravelDB' => 1
        ]);

        DB::table('werktijden')->insert([
            'id' => 3,
            'user_id' => 2, 
            'begin_shift' => '02-07-2021 15:14:36',
            'einde_shift' => '02-07-2021 20:15:00',
            'inLaravelDB' => 1
        ]);

        DB::table('werktijden')->insert([
            'id' => 4,
            'user_id' => 2, 
            'begin_shift' => '04-07-2021 08:01:36',
            'einde_shift' => '04-07-2021 20:15:02',
            'inLaravelDB' => 1
        ]);
        
        
    }
}
