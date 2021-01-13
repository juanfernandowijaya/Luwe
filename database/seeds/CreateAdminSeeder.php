<?php

use Illuminate\Database\Seeder;
use App\User;

class CreateAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //buat user admin
        $user = User::create([
            'name' => 'JuanFW',
            'image' => 'juan.jpg',
            'email' => 'juan@gmail.com',
            'password' => bcrypt(1234),
            'isActive' => 1,
        ]);
        $user->assignRole('admin', 'user');

        //buat user biasa
        $user = User::create([
            'name' => 'Billie',
            'image' => 'billie.jpg',
            'email' => 'billie@gmail.com',
            'password' => bcrypt(1234),
            'isActive' => 1,
        ]);
        $user->assignRole('user');

        $user = User::create([
            'name' => 'Jsven',
            'image' => 'jsven.jpg',
            'email' => 'jsven@gmail.com',
            'password' => bcrypt(1234),
            'isActive' => 1,
        ]);
        $user->assignRole('user');
    }
}
