<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activities')->truncate();
        DB::table('activities')->insert([
            [
                'activity'=> 'Football',
            ],[
                'activity'=> 'Basketbal',
            ], [
                'activity'=> 'Tennis',
            ], [
                'activity'=> 'Golf',
            ],
        ]);

    }
}
