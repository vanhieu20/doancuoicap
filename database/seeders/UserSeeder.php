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
            'email' => 'vvhieu.18i@cit.udn.vn',
            'password' => \Hash::make('admin123'),
        ]);
    }
}
