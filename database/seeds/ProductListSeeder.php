<?php

use Illuminate\Database\Seeder;
use App\ProductList;

class ProductListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = ProductList::create([
            'shop_id' => '1',
            'product_name' => 'Tempe Penyet',
            'product_image' => 'cakgon1.jpg',
            'product_price' => 'Rp. 5.000',
            'product_description' => 'Tempe Penyet digoreng dengan kenikmatan minyak duniawi',
            'product_stock' => 'unlimited',
        ]);
        $product = ProductList::create([
            'shop_id' => '1',
            'product_name' => 'Kol Goreng',
            'product_image' => 'cakgon2.jpg',
            'product_price' => 'Rp. 3.000',
            'product_description' => 'Kol Goreng Minyak',
            'product_stock' => 'unlimited',
        ]);
        $product = ProductList::create([
            'shop_id' => '1',
            'product_name' => 'Ayam Penyet',
            'product_image' => 'cakgon3.jpg',
            'product_price' => 'Rp. 20.000',
            'product_description' => 'Ayam Penyet Special Cak Gon',
            'product_stock' => 'unlimited',
        ]);
        $product = ProductList::create([
            'shop_id' => '1',
            'product_name' => 'Kol Goreng Limited',
            'product_image' => 'cakgon6.jpg',
            'product_price' => 'Rp. 20.000',
            'product_description' => 'Kol Goreng dengan tambahan minyak berkolestrol tinggi nikmat dimakan',
            'product_stock' => 'unlimited',
        ]);
        $product = ProductList::create([
            'shop_id' => '1',
            'product_name' => 'Lele Goreng',
            'product_image' => 'cakgon7.jpg',
            'product_price' => 'Rp. 20.000',
            'product_description' => 'Lele Goreng',
            'product_stock' => 'unlimited',
        ]);
        // $product = ProductList::create([
        //     'shop_id' => '2',
        //     'product_name' => 'Sate Ayam',
        //     'product_price' => 'Rp. 4.500',
        //     'product_description' => 'Sate Khusus',
        //     'product_stock' => '10',
        // ]);
        // $product = ProductList::create([
        //     'shop_id' => '2',
        //     'product_name' => 'Rica Rica Ayam',
        //     'product_price' => 'Rp. 10.000',
        //     'product_description' => 'Rica Rica ayam dimasak dengan black pepper special',
        //     'product_stock' => '5',
        // ]);
    }
}
