<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            'area_id' => 42422,
            'a_name' => 'Ahnaf Islam',
            'a_incharge_name' => 'Sagor Das',
            'emplyee_id' => 52241,
        ]);
        DB::table('areas')->insert([
            'area_id' => 44223,
            'a_name' => 'Shams Ahmed',
            'a_incharge_name' => 'MH Soikot',
            'emplyee_id' => 84673,
        ]);
    }
}
