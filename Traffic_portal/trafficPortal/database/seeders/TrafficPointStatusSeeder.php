<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrafficPointStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('traffic_point_statuses')->insert([
            'schedule_name' => 'morning',
            'vechile_numbers' => 22,
            'zone'=>'north',
            'date'=>'2022-11-07',
            'tp_id' => 1
        ]);
        DB::table('traffic_point_statuses')->insert([
            'schedule_name' => 'afternoon',
            'vechile_numbers' => 22,
            'zone'=>'north',
            'date'=>'2022-11-07',
            'tp_id' => 1,
        ]);
        DB::table('traffic_point_statuses')->insert([
            'schedule_name' => 'night',
            'vechile_numbers' => 22,
            'zone'=>'north',
            'date'=>'2022-11-07',
            'tp_id' => 1,
        ]);
        DB::table('traffic_point_statuses')->insert([
            'schedule_name' => 'night',
            'vechile_numbers' => 22,
            'zone'=>'north',
            'date'=>'2022-11-05',
            'tp_id' => 1,
        ]);
    }
}
