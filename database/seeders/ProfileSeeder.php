<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'Main Uddin',
            'image' => 'image',
            'email' => 'mdmain4750@gmail.com',
            'profile' => 'Developer',
            'phone' => '+8801775864306',
            'about' => 'description',
        ]);
    }
}
