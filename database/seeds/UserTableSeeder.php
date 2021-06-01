<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsertableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
            [
                'name'=> 'Selman',
                'infix'=> '',
                'last_name'=> 'Muglu',
                'email'=> 'Selman@mail.com',
                'password' => Hash::make('password')

            ]
        ]);
    }
}
