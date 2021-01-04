<?php

use Illuminate\Database\Seeder;
use App\Promo;

class PromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $promo = Promo::create([
            'nama_promo' => 'DANA NEW YEAR FESTIVAL',
            'deskripsi_promo' => '....',
            'gambar_promo' => 'promo1.png',
            'datatarget_promo' => '1',
            'snk_promo' => 'Setiap Pengguna hanya bisa menggunakan 1x/periode'
        ]);
        $promo = Promo::create([
            'nama_promo' => 'GOPAY HARI AYAH',
            'deskripsi_promo' => '....',
            'gambar_promo' => 'promo2.png',
            'datatarget_promo' => '2',
            'snk_promo' => 'Setiap Pengguna hanya bisa menggunakan 1x/hari'
        ]);
        $promo = Promo::create([
            'nama_promo' => 'OVO MANTAP',
            'deskripsi_promo' => '....',
            'gambar_promo' => 'promo3.png',
            'datatarget_promo' => '3',
            'snk_promo' => 'Setiap Pengguna hanya bisa menggunakan 1x/hari'
        ]);
        $promo = Promo::create([
            'nama_promo' => 'SHOPEEPAY 1 RUPIAH',
            'deskripsi_promo' => '....',
            'gambar_promo' => 'promo4.png',
            'datatarget_promo' => '4',
            'snk_promo' => 'Setiap user hanya bisa melakukan transaksi 1x per hari'
        ]);
    }
}
