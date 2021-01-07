<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //call untuk memangil seeder dibawah saat di run
        $this->call(RoleTableSeeder::class);
        $this->call(CreateAdminSeeder::class);
        // $this->call(CreateUserSeeder::class); error mbuh dimana
        $this->call(RekomendasiSeeder::class);
        $this->call(PromoSeeder::class);
        $this->call(KodePromoSeeder::class);
        $this->call(GallerySeeder::class);
        $this->call(ArtikelSeeder::class);
    }
}
