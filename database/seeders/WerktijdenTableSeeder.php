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
            'begin_shift' => NOW(),
            'aantal_uren_gewerkt' => '09:00:00',
            'aantal_uren_pauze' => '01:15:00',
            'einde_shift' => NOW()
        ]);
        
        //
    }
}
