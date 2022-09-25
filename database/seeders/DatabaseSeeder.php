<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Main Uddin',
            'email' => 'mdmain4750@gmail.com',
            'image' => 'profile',
            'description' => 'descrtiptoi',
            'phone' => '3483478774',
            'age' => '443',
            'address' => 'bhalijg',
            'password' => Hash::make('mdmain4750'),
        ]);
    }
}
