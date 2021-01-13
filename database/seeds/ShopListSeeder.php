<?php

use App\ShopList;
use Illuminate\Database\Seeder;

class ShopListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $shop = ShopList::create([
        //     'shop_name' => 'Warunk Cak Gondrong',
        //     'shop_address' => 'Depan Kompleks Araya',
        //     'shop_image' => 'cakgon.png',
        //     'shop_contact' => '081222',
        // ]);
        // $shop = ShopList::create([
        //     'shop_name' => 'Warunk Mas Jo',
        //     'shop_image' => 'masjo.png',
        //     'shop_address' => 'Depan Rumah Andre',
        //     'shop_contact' => '08531212',
        // ]);
        $shop = ShopList::create([
            'shop_name' => 'Warung Masjo',
            'shop_image' => 'shop1.jpg',
            'shop_address' => 'Depan Araya',
            'shop_dayopen' => 'Senin - Minggu',
            'shop_timeopen' => '07.00 - 21.00',
            'shop_desc' => 'Tanggal Merah Tutup',
            'shop_contact' => '08531212111',
        ]);
        $shop = ShopList::create([
            'shop_name' => 'Warung Cakgon',
            'shop_image' => 'shop2.jpg',
            'shop_address' => 'Belakang Rumah Andre',
            'shop_dayopen' => 'Senin - Minggu',
            'shop_timeopen' => '07.00 - 21.00',
            'shop_desc' => 'Tanggal Merah Tutup',
            'shop_contact' => '08531212222',
        ]);
        $shop = ShopList::create([
            'shop_name' => 'Warung Warungan',
            'shop_image' => 'shop3.jpg',
            'shop_address' => 'Belakang Plaza Araya',
            'shop_dayopen' => 'Senin - Minggu',
            'shop_timeopen' => '07.00 - 21.00',
            'shop_desc' => 'Tanggal Merah Tutup',
            'shop_contact' => '0853',
        ]);
        $shop = ShopList::create([
            'shop_name' => 'Warung Benny',
            'shop_image' => 'shop4.jpg',
            'shop_address' => 'Depan Rumah J',
            'shop_dayopen' => 'Senin - Minggu',
            'shop_timeopen' => '07.00 - 21.00',
            'shop_desc' => 'Buka Setiap Hari selain Kiamat',
            'shop_contact' => '0853121212112314',
        ]);
    }
}
