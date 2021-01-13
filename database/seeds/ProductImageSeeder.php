<?php

use App\ProductImage;
use Illuminate\Database\Seeder;
use App\ProductList;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $image = ProductImage::create([
            'product_id' => '1',
            'product_image' => 'cakgon1.jpg',
        ]);
        $image = ProductImage::create([
            'product_id' => '1',
            'product_image' => 'cakgon2.jpg',
        ]);
        $image = ProductImage::create([
            'product_id' => '1',
            'product_image' => 'cakgon3.jpg',
        ]);
    }
}
