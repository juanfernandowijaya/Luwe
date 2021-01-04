<?php

use App\Article;
use Illuminate\Database\Seeder;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artikel = Article::create([
            'user_id' => '1',
            'user_comment' => 'Nasgor Harya Terbaik Semalang',
            'user_instagram' => 'frederick.com',
        ]);
    }
}
