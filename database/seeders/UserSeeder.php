<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'hno' => 'S-2021-AD-00001',
            'first_name' => 'Admin',
            'last_name' => 'OHMS',
            'user_type' => '7X707',
            'email' => 'admin@ohms.com',
            'phone_no' => '+8801711-223344',
            'is_doctor' => false,
            'password' => Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'hno' => 'D-2021-DR-00001',
            'first_name' => 'Jasmin',
            'last_name' => 'Kabir',
            'user_type' => '5X505',
            'email' => 'j.doctor@ohms.com',
            'phone_no' => '+8801711-223366',
            'is_doctor' => true,
            'password' => Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'hno' => 'D-2021-DR-00002',
            'first_name' => 'Rashed',
            'last_name' => 'Kabir',
            'user_type' => '5X505',
            'email' => 'r.doctor@ohms.com',
            'phone_no' => '+8801711-223377',
            'is_doctor' => true,
            'password' => Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'hno' => 'D-2021-DR-00003',
            'first_name' => 'Sulaiman',
            'last_name' => 'Kabir',
            'user_type' => '5X505',
            'email' => 's.doctor@ohms.com',
            'phone_no' => '+8801711-223388',
            'is_doctor' => true,
            'password' => Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'hno' => 'P-2021-PA-00001',
            'first_name' => 'Patient',
            'last_name' => 'OHMS',
            'user_type' => '1X101',
            'email' => 'patient@ohms.com',
            'phone_no' => '+8801711-223355',
            'is_doctor' => false,
            'password' => Hash::make('123456'),
        ]);
    }
}
