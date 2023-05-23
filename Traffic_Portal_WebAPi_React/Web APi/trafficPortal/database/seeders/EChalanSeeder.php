<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EChalanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('e_chalans')->insert([
            'employe_id'=>1,
            'name' => 'Paul Tomal',
            'name' => 'Paul Tomal',
            'trasport' => 'Rickshwa',
            'vehicle_no' =>"Dhaka city 00-234",
            'crime' => "Theft",
            'fee' => "3000",
        ]);
    }
}
