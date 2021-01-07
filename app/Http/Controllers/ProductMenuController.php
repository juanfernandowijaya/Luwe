<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rekomendasi;
use App\Promo;
use App\KodePromo;
use App\Gallery;
use App\Article;

class ProductMenuController extends Controller
{
    public function MasterRekomendasi(Request $request)
    {
        //rekomendasi master
        $rekomendasi = Rekomendasi::all();
        return view('account/accountMenu/master_rekomendasi', ['rekomendasi' => $rekomendasi]);
    }
    public function MasterPromo(Request $request)
    {
        $promo = Promo::all();
        $kodePromo = KodePromo::all();
        return view('account/accountMenu/master_promo', ['promo' => $promo, 'kodePromo' => $kodePromo]);
    }
    public function MasterGallery(Request $request)
    {
        $gallery = Gallery::all();
        return view('account/accountMenu/master_gallery', ['gallery' => $gallery]);
    }
    public function MasterArticle(Request $request)
    {
        $article = Article::all();
        return view('account/accountMenu/master_article', ['article' => $article]);
    }
}
