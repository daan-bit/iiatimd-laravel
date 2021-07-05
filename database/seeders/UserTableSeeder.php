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
            'name' => "Jan",
            'email' => 'jan@gmail.com',
            'password' => bcrypt("werknemer"),
            'rol' => 'werknemer'
        ]);

        DB::table('users')->insert([
            'name' => "Cees",
            'email' => 'cees@gmail.com',
            'password' => bcrypt("werknemer2"),
            'rol' => 'werknemer'
        ]);

        DB::table('users')->insert([
            'name' => "Admin",
            'email' => 'admin@gmail.com',
            'password' => bcrypt("admin"),
            'rol' => 'werkgever'
        ]);
    }
}
