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

Route::get('/beranda', function () {
    return view('test-z');
});

//===||login SEMUA||===// 

Route::group(['middleware' => ['auth','checkRole:wirausahawan,humas,admin']], function(){

Route::get('/index','AuthController@role');

});

//===||login ADMIN||===// 

Route::group(['middleware' => ['auth','checkRole:admin']], function(){

Route::get('/akun-humas','HumasController@index');

Route::post('/buat-akun-humas','HumasController@create');

Route::post('/update-akun-humas','HumasController@update');

Route::get('/usaha-telah-terverifikasi','UsahaController@indexAdmin');

Route::post('/tambahkan-usaha-unggulan','UsahaController@addFav');

Route::post('/delete-akun-humas','HumasController@delete');


});


//===||login WIRAUSAHAWAN||===// 

Route::group(['middleware' => ['auth','checkRole:wirausahawan']], function(){

Route::get('/beranda-wirausaha','BerandaController@wira');

Route::get('/usaha','UsahaController@index');

Route::post('/buat-usaha','UsahaController@create');

Route::post('/edit-buat-usaha','UsahaController@update');

Route::get('/notifikasi/{id}','NotifikasiController@hasBeenRead');

Route::get('/usaha-terverifikasi','UsahaController@verified');

Route::get('/produk-unggul','ProdukController@produkUnggul');

Route::get('/detail-usaha/{id}','ProdukController@Details');

Route::get('/profil-saya','ProfilController@indexWira');

Route::post('/ubah-informasi-npwp','ProfilController@ubahInformasiNPWP');

Route::post('/ubah-informasi-ktp','ProfilController@ubahInformasiKTP');

Route::post('/ubah-informasi-BPJSKetenagakerjaan','ProfilController@ubahInformasiBPJSKetenagakerjaan');

Route::post('/ubah-informasi-BPJSKesehatan','ProfilController@ubahInformasiBPJSKesehatan');

Route::post('/ubah-informasi-formal','ProfilController@ubahInformasiFormal');

});

//===||login HUMAS||===// 

Route::group(['middleware' => ['auth','checkRole:humas']], function(){

Route::get('/lihat-pemohon','PemohonController@index');

Route::post('/verifikasi-pemohon','PemohonController@acc');

Route::post('/tolak-buat-usaha','UsahaController@dec');

Route::get('/profil','ProfilController@indexHumas');

Route::post('/ubah-informasi-humas','ProfilController@updateHumas');

Route::get('/usaha-telah-verif','UsahaController@allVerified');

Route::get('/lihat-pemohon/{id}','PemohonController@detail');

});

Route::get('/conver-pdf/{id}','PemohonController@cetak');

Route::get('/login','AuthController@index');

Route::post('/postlogin','AuthController@postlogin');

Route::get('/logout','AuthController@logout');

Route::get('/registrasi-wirausahawan','WirausahaController@index');

Route::post('/buat-akun-wirausaha','WirausahaController@create');

Route::get('/produk-unggulan','ProdukController@index');

Route::get('/','ProdukController@indexxes');

Route::get('/detail/{id}','ProdukController@detail');



Route::get('/test','ProdukController@test');