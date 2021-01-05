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
            'name' => 'Võ Văn Hiếu',
            'email' => 'tuoipt.99@gmai.com',
            'password' => \Hash::make('admin123'),
        ]);
    }
}
