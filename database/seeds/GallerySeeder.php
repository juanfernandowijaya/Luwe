<?php

use App\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gallery = Gallery::create([
            'gallery_item_name' => 'Nasi Goreng Harya',
            'gallery_image' => 'food01.jfif',
            'gallery_deskripsi' => 'Nasi Goreng Harya Berlokasikan Di malang',
        ]);
        $gallery = Gallery::create([
            'gallery_item_name' => 'Nasi Campur Bu Fred',
            'gallery_image' => 'food02.jfif',
            'gallery_deskripsi' => 'Nasi Campur Bu Frederick Terkenal akan ciri khas nya ...',
        ]);
        $gallery = Gallery::create([
            'gallery_item_name' => 'Sate Babi Pekalongan',
            'gallery_image' => 'food03.jfif',
            'gallery_deskripsi' => 'Sate Babi Pekalongan rasa plus plus',
        ]);
        $gallery = Gallery::create([
            'gallery_item_name' => 'Nasi Khas Malang',
            'gallery_image' => 'food04.jfif',
            'gallery_deskripsi' => 'Nasi Khas Malang berlokasikan di araya',
        ]);
        $gallery = Gallery::create([
            'gallery_item_name' => 'Bakmi Goreng',
            'gallery_image' => 'food05.jfif',
            'gallery_deskripsi' => 'Bakmi Goreng',
        ]);
        $gallery = Gallery::create([
            'gallery_item_name' => 'Kripik Kentang Madu',
            'gallery_image' => 'food06.jfif',
            'gallery_deskripsi' => 'Kripik Kentang dengan kentang pilihan dan dengan campuran madu khas malang',
        ]);
    }
}
