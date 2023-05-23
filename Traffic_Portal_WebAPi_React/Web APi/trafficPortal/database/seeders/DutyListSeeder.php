<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DutyListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('duty_lists')->insert([
            'date' => '2022-11-07',
            'schedule_name' => 'Morning',
            'employe_id' =>1,
            'tp_id' => 1,
        ]);
        DB::table('duty_lists')->insert([
            'date' => '2022-11-07',
            'schedule_name' => 'Morning',
            'employe_id' =>2,
            'tp_id' =>1,
        ]);
        DB::table('duty_lists')->insert([
            'date' => '2022-11-07',
            'schedule_name' => 'Morning',
            'employe_id' =>3,
            'tp_id' =>1,
        ]);
        DB::table('duty_lists')->insert([
            'date' => '2022-11-07',
            'schedule_name' => 'Morning',
            'employe_id' =>4,
            'tp_id' =>1,
        ]);
        DB::table('duty_lists')->insert([
            'date' => '2022-11-07',
            'schedule_name' => 'afternoon',
            'employe_id' =>5,
            'tp_id' => 1,
        ]);
        DB::table('duty_lists')->insert([
            'date' => '2022-11-07',
            'schedule_name' => 'afternoon',
            'employe_id' =>9,
            'tp_id' =>1,
        ]);
        DB::table('duty_lists')->insert([
            'date' => '2022-11-07',
            'schedule_name' => 'afternoon',
            'employe_id' =>10,
            'tp_id' =>1,
        ]);
        DB::table('duty_lists')->insert([
            'date' => '2022-11-07',
            'schedule_name' => 'afternoon',
            'employe_id' =>11,
            'tp_id' =>1,
        ]);
        DB::table('duty_lists')->insert([
            'date' => '2022-11-07',
            'schedule_name' => 'night',
            'employe_id' =>12,
            'tp_id' => 1,
        ]);
        DB::table('duty_lists')->insert([
            'date' => '2022-11-07',
            'schedule_name' => 'night',
            'employe_id' =>13,
            'tp_id' =>1,
        ]);
        DB::table('duty_lists')->insert([
            'date' => '2022-11-07',
            'schedule_name' => 'night',
            'employe_id' =>14,
            'tp_id' =>1,
        ]);
        DB::table('duty_lists')->insert([
            'date' => '2022-11-07',
            'schedule_name' => 'night',
            'employe_id' =>15,
            'tp_id' =>1,
        ]);
    }
}
