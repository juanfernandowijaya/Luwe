<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rekomendasi;
use App\Promo;
use App\KodePromo;
use App\Gallery;
use App\Article;
use Image;

class ProductMenuController extends Controller
{
    public function MasterRekomendasi(Request $request)
    {
        //rekomendasi master
        $rekomendasi = Rekomendasi::all();
        return view('account/accountMenu/master_rekomendasi', ['rekomendasi' => $rekomendasi]);
    }
    public function addRecommendation(Request $request)
    {
        $request->validate([
            'recommendation_name' => 'required',
            'recommendation_image' => 'required|file|image|mimes:jpeg,png,jpg,jfif|max:2048',
            'recommendation_desc' => 'required',
            'recommendation_link' => 'required',
        ]);
        if ($request->hasFile('recommendation_image')) {
            if ($request->file('recommendation_image')->isValid()) {
                $file = $request->file('recommendation_image');
                $file_name = time() . "_" . $file->getClientOriginalName();
                $file_path = base_path() . '/public/storage/assets_home/images/rekomendasi';
                $request->file('recommendation_image')->move($file_path, $file_name);
                $rekomendasi = new Rekomendasi();
                $rekomendasi->nama_rekomendasi = $request->recommendation_name;
                $rekomendasi->gambar_rekomendasi = $file_name;
                $rekomendasi->deskripsi_rekomendasi = $request->recommendation_desc;
                $rekomendasi->link_rekomendasi = $request->recommendation_link;
                $rekomendasi->save();
                return redirect('admin/rekomendasi');
            } else {
                return redirect('admin/rekomendasi')->with('status', 'image not valid');
            }
        }
    }
    public function MasterPromo(Request $request)
    {
        $promo = Promo::all();
        $kodePromo = KodePromo::all();
        return view('account/accountMenu/master_promo', ['promo' => $promo, 'kodePromo' => $kodePromo]);
    }
    public function addPromo(Request $request)
    {
        $request->validate([
            'promo_name' => 'required',
            'promo_image' => 'required|file|image|mimes:jpeg,png,jpg,jfif|max:2048',
            'promo_desc' => 'required',
            'promo_snk' => 'required',
        ]);
        if ($request->hasFile('promo_image')) {
            if ($request->file('promo_image')->isValid()) {
                $file = $request->file('promo_image');
                $file_name = time() . "_" . $file->getClientOriginalName();
                $file_path = base_path() . '/public/storage/assets_home/images/promo';
                $request->file('promo_image')->move($file_path, $file_name);
                $promo = new Promo();
                $promo->nama_promo = $request->promo_name;
                $promo->deskripsi_promo = $request->promo_desc;
                $promo->gambar_promo = $file_name;
                $promo->snk_promo = $request->promo_snk;
                $promo->save();
                return redirect('admin/promo');
            } else {
                return redirect('admin/promo')->with('status', 'image not valid');
            }
        }
    }
    public function addCodePromo(Request $request)
    {
        $request->validate([
            'promo_code' => 'required',
            'promo_quota' => 'required',
            'promo_id' => 'required',
        ]);
        $kodePromo = new KodePromo();
        $kodePromo->promo_id = $request->promo_id;
        $kodePromo->kode_promo = $request->promo_code;
        $kodePromo->kuota = $request->promo_quota;
        $kodePromo->save();
        return redirect('admin/promo');
    }
    public function MasterGallery(Request $request)
    {
        $gallery = Gallery::all();
        return view('account/accountMenu/master_gallery', ['gallery' => $gallery]);
    }
    public function addGallery(Request $request)
    {
        $request->validate([
            'gallery_name' => 'required',
            'gallery_image' => 'required',
            'gallery_desc' => 'required',
        ]);
        if ($request->hasFile('gallery_image')) {
            if ($request->file('gallery_image')->isValid()) {
                $file = $request->file('gallery_image');
                $file_name = time() . "_" . $file->getClientOriginalName();
                $file_path = base_path() . '/public/storage/assets_home/images/gallery';
                $request->file('gallery_image')->move($file_path, $file_name);
                $gallery = new Gallery();
                $gallery->gallery_item_name = $request->gallery_name;
                $gallery->gallery_image = $file_name;
                $gallery->gallery_deskripsi = $request->gallery_desc;
                $gallery->save();
                return redirect('admin/gallery');
            } else {
                return redirect('admin/gallery')->with('status', 'image not valid');
            }
        }
    }
    public function MasterArticle(Request $request)
    {
        $article = Article::all();
        return view('account/accountMenu/master_article', ['article' => $article]);
    }
}
