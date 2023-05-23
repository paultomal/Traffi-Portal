<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CivilEmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('civil_employees')->insert([
            'ce_id' => 65732,
            'ce_name' => 'Nahiun',
            'organization_name' => 'Organization 1',
            'user_id' => 28353,
        ]);
    }
}
