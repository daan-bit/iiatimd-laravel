<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class VakantiedagenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vakantiedagen')->insert([
            'user_id' => 3, ////werknemer
            'vakantie_van' => '30-06-2021',
            'vakantie_tot' => '10-07-2021',
            'inLaravelDB' => 1
        ]);
        DB::table('vakantiedagen')->insert([
            'user_id' => 2, ////werknemer
            'vakantie_van' => '25-06-2021',
            'vakantie_tot' => '31-07-2021',
            'inLaravelDB' => 1
        ]);
        DB::table('vakantiedagen')->insert([
            'user_id' => 3, ////werknemer
            'vakantie_van' => '30-07-2021',
            'vakantie_tot' => '15-08-2021',
            'inLaravelDB' => 1
        ]);
        //
    }
}
