<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrafficPointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('traffic_points')->insert([
            
            'tp_name' => 'House Building',
            'tp_incharge_name' => 'Rahim Khan',
            'emplyee_id' => 84673,
            'area_id' => 44223,
        ]);
        DB::table('traffic_points')->insert([
            
            'tp_name' => 'Kuril',
            'tp_incharge_name' => 'MH Soikot',
            'emplyee_id' => 63756,
            'area_id' => 92354,
        ]);
        DB::table('traffic_points')->insert([
            
            'tp_name' => 'BijoySharani',
            'tp_incharge_name' => 'Rahim Khan',
            'emplyee_id' => 84673,
            'area_id' => 44223,
        ]);
        DB::table('traffic_points')->insert([
            
            'tp_name' => 'House Building',
            'tp_incharge_name' => 'MH Soikot',
            'emplyee_id' => 63756,
            'area_id' => 92354,
        ]);
        DB::table('traffic_points')->insert([
            
            'tp_name' => 'Banani',
            'tp_incharge_name' => 'MH Soikot',
            'emplyee_id' => 63756,
            'area_id' => 92354,
        ]);
    }
}
