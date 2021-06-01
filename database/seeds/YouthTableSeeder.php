<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class YouthTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('youth')->truncate();
        DB::table('youth')->insert([
            [
                'name'=> 'jongeren1',
                'infix'=> 'van',
                'last_name'=> 'haag',
                'registration_date'=>Carbon::create('2021', '05', '2'),
            ],[
                'name'=> 'jongeren2',
                'infix'=> 'van',
                'last_name'=> 'adam',
                'registration_date'=>Carbon::create('2021', '06', '24'),
            ],[
                'name'=> 'jongeren3',
                'infix'=> 'van',
                'last_name'=> 'rdam',
                'registration_date'=>Carbon::create('2021', '09', '19'),

            ],[
                'name'=> 'jongeren4',
                'infix'=> 'van',
                'last_name'=> 'os',
                'registration_date'=>Carbon::create('2021', '11', '27'),
            ]
        ]);
    }
}
