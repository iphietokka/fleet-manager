<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('users')->insert([


            [
                'name' => '001101',
                'role_id' => '1',
                'email' => 'admin@demo.com',
                'password' => bcrypt('123456'),
            ],

            [
                'name' => 'Admin',
                'role_id' => '2',
                'email' => 'driver@demo.com',
                'password' => bcrypt('123456'),
            ],

        ]);
    }
}
