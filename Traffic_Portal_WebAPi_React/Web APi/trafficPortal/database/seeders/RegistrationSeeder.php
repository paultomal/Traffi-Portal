<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegistrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('registrations')->insert([
            'name'=>'Sifat Molla',
            'age'=>'23',
            'email'=>'sifat@gmail.com',
            'phn'=>'01811835430',
            'adrs'=>'Khilkhet, Dhaka',
            "pass"=>'sifat123'
        ]);
    }
}
