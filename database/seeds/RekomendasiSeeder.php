<?php

use App\Rekomendasi;
use Illuminate\Database\Seeder;

class RekomendasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seeder isi data untuk rekomendasi
        $rekomendasi = Rekomendasi::create([
            'nama_rekomendasi' => 'Kopi',
            'gambar_rekomendasi' => 'rekomendasi1.jfif',
            'deskripsi_rekomendasi' => 'Beraneka Ragam Kopi-Kopian Khas Malang dapat ditemukan di luwe',
            'link_rekomendasi' => '/rekomendasi',
        ]);
        $rekomendasi = Rekomendasi::create([
            'nama_rekomendasi' => 'Makanan',
            'gambar_rekomendasi' => 'rekomendasi2.jpg',
            'deskripsi_rekomendasi' => 'Aneka Makanan dengan Ciri Khas Kota Malang dapat ditemukan di luwe',
            'link_rekomendasi' => '/rekomendasi',
        ]);
        $rekomendasi = Rekomendasi::create([
            'nama_rekomendasi' => 'Oleh - Oleh',
            'gambar_rekomendasi' => 'rekomendasi3.jpg',
            'deskripsi_rekomendasi' => 'Banyak Jenis oleh-oleh yang terdapat di kota malang dapat ditemukan di luwe',
            'link_rekomendasi' => '/rekomendasi',
        ]);
    }
}
