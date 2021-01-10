<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'name' => 'Phạm Thanh Tươi',
            'email' => 'tuoipt.99@gmail.com',
            'phone' => '0975323376',
            'address' => 'Quảng Nam',
            'password' => \Hash::make('admin123'),
        ]);
    }
}
