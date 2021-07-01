<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Daan",
            'email' => 'daniel@gmail.com',
            'password' => bcrypt("a"),
            'rol' => 'werkgever'
        ]);

        DB::table('users')->insert([
            'name' => "Daan",
            'email' => 'daniel2@gmail.com',
            'password' => bcrypt("a"),
            'rol' => 'werknemer'
        ]);

        DB::table('users')->insert([
            'name' => "Alex",
            'email' => 's1118551admin2@gmail.com',
            'password' => bcrypt("iiatimdalex"),
            'rol' => 'werkgever'
        ]);

        DB::table('users')->insert([
            'name' => "Alex",
            'email' => 's1118551@gmail.com',
            'password' => bcrypt("iiatimdalex"),
            'rol' => 'werknemer'
        ]);
    }
}
