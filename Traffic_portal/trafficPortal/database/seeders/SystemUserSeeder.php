<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SystemUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('system_users')->insert([
            'email'=>'area@gmail.com',
            'password'=>'area1234',
            'role'=>'ai'
        ]);
        DB::table('system_users')->insert([
            'email'=>'tp@gmail.com',
            'password'=>'tp1234',
            'role'=>'tp'
        ]);
        DB::table('system_users')->insert([
            'email'=>'de@gmail.com',
            'password'=>'de1234',
            'role'=>'de'
        ]);
    }
}
