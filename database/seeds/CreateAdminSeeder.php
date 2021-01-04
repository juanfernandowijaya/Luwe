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
            'name' => 'admin',
            'image' => 'billie.jpg',
            'email' => 'juan@gmail.com',
            'password' => bcrypt(1234),
            'isActive' => 1,
        ]);
        $user->assignRole('admin');
    }
}
