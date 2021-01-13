<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Spatie\Permission\Models\Role;

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index');
Route::get('/rekomendasi', 'HomeController@RecommendationIndex');
Route::get('/rekomendasi/{id}', 'HomeController@detailItem');

Route::get('/login', 'UserAuth@index')->middleware('CekLogin')->name('login');
Route::post('/login', 'UserAuth@login');
Route::get('/register', 'UserAuth@IndexRegister');
Route::post('/register', 'UserAuth@SubmitRegister');

//admin
Route::get('/admin', 'AdminController@index');

//route normal user
Route::middleware('auth')->group(function () {
    Route::get('/account', 'Account@Index');
    Route::POST('/order', 'Account@Order');
});

//route auth jika tidak login tidak bisa akses panel admin
Route::middleware('auth', 'role:admin')->group(function () {
    //rekomendasi
    Route::get('/admin/rekomendasi', 'ProductMenuController@MasterRekomendasi');
    Route::post('/admin/rekomendasi', 'ProductMenuController@addRecommendation');
    //promo
    Route::get('/admin/promo', 'ProductMenuController@MasterPromo');
    Route::post('/admin/promo', 'ProductMenuController@addPromo');
    Route::post('/admin/promo/code', 'ProductMenuController@addCodePromo');
    //gallery
    Route::get('/admin/gallery', 'ProductMenuController@MasterGallery');
    Route::post('/admin/gallery', 'ProductMenuController@addGallery');
    //artikel
    Route::get('/admin/article', 'ProductMenuController@MasterArticle');
    //user setting permission control/role control
    Route::get('/admin/usersetting', 'AdminController@userSetting');
    Route::post('/admin/usersetting', 'AdminController@userChangeAuthority');
    //item list
    Route::get('/admin/shoplist', 'AdminController@shopList');
});

Route::middleware('auth', 'role:user')->group(function () {
    Route::get('/user/account', 'Account@AccountIndex');
    Route::post('/user/account', 'Account@UserEdit');
});

Route::get('/account/test', 'Account@test');
Route::get('/logout', 'UserAuth@logout');



// Route::get('/', function () {
//     //auth()->user()->assignRole('admin');
//     //auth()->user()->removeRole('admin');
//     //auth()->user()->syncRoles(['admin', 'user']);
//     //if (auth()->user()->hasRole('admin')) {
//     //     return 'Admin';
//     //}
//     //$user->givePermissionTo('edit post');
//     //dd($user->hasPermissionTo('delete post'));

//     //memberi permission pada role
//     // $role = Role::find(1);
//     // $role->givePermissionTo('add post', 'edit post', 'delete post', 'view post');

//     //cek apakah user bisa mengakses  edit post
// $user = auth()->user();
//$role = Role::find(1);
// $role->givePermissionTo('view post');
// dd($user->can('view post'));
// });


// Route::get('/account', function(){
//     if(auth()->user()->hasRole('admin'))
// });
