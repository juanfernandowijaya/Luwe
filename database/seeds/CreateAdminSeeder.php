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
            'image' => 'billie.jpg',
            'email' => 'juan@gmail.com',
            'password' => bcrypt(1234),
            'isActive' => 1,
        ]);
        $user->assignRole('admin');

        //buat user biasa
        $user = User::create([
            'name' => 'Harrya',
            'image' => 'harya.jpg',
            'email' => 'harya@gmail.com',
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
