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
            'user_id' => 1, ////werknemer
            'begin_shift' => '30-06-2021 15:14:36',
            'einde_shift' => '30-06-2021 20:15:00',
            'inLaravelDB' => 1
        ]);
        
        //
    }
}
