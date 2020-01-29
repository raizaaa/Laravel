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

Route::get('/', function () {
    return view('welcome');
});

// Route Basic
Route::get('halo',function()
{
    return 'Halo Ini Aplikasi Laravel Pertama Saya'.
            '<br>Laravel is Magical Framework';
});


Route::get('about',function()
{
    return '<h1>Halo</h1>'
            .'Selamat datang di webApp saya<br>'
            .'Laravel, emang keren.';
});


Route::get('raiza',function()
{
    return 'Halo Perkenalkan<br>'
            .'Nama saya Raiza Nur Pitriani<br>'
            .'Saya duduk di kelas XI RPL 1<br>'
            .'Saya tinggal di Bandung<br>';
});

Route::get('keiza',function()
{
    return 'Halo Perkenalkan<br>'
            .'Nama saya Keiza Veronica<br>'
            .'Saya duduk di kelas XI RPL 8<br>'
            .'Saya tinggal di Indonesia<br>';
});

Route::get('cika',function()
{
    return 'Halo Perkenalkan<br>'
            .'Nama saya Cika<br>'
            .'Saya duduk di kelas  XII Akutansi<br>'
            .'Saya tinggal di Samarinda<br>';
});

Route::get('andra',function()
{
    return 'Halo Perkenalkan<br>'
            .'Nama saya Andra<br>'
            .'Saya duduk di kelas  XII IPA<br>'
            .'Saya tinggal di Jawa Tengah<br>';
});

Route::get('rina',function()
{
    return 'Halo Perkenalkan<br>'
            .'Nama saya Rina Fatmawati<br>'
            .'Saya duduk di kelas  IX<br>'
            .'Saya tinggal di Bandung<br>';
});

//Route Parameter
Route::get('biodata/{nama}',function($a)
{
    return 'Halo Ini Biodata '.$a;
});


Route::get('biodata/{nama}/{alamat}/{sekolah}/{umur}',function($a,$b,$c,$d)
{
    return 'Halo Ini Biodata '.$a.'<br>'
    .$a.' tinggal di '.$b.'<br>'
    .$a.' sekolah di '.$c.'<br>'
    .$a.' berumur '.$d.' tahun';
});

//Route optional parameter
Route::get('name/{param?}',function($a="kenedy"){
    return 'Your name is '.$a;
});

Route::get('pesan/{makan?}/{minum?}/{harga?}',function($makan=null,$minum=null,$harga=null){
    if (isset($makan)) {
        $makan = 'Anda Memesan '.$makan;
        echo $makan;
    }
    if (isset($minum)) {
        $minum = " & ". $minum;
        echo $minum;
    }
    if (!$makan && !$minum) {
        return "Anda Belum Memesan sesuatu. Silahkan Memesan terlebih dahulu-!";
    }
    if (isset($harga)) {
        $size = " dengan harga $ ".$harga;
        echo $size;
        if($harga <= 0) {
            echo ' Maaf Harga Tidak Valid';
        }
        elseif ($harga >= 35000) {
            echo ' dan size Large';
        }
        elseif ($harga >= 25000) {
            echo ' dan size Medium';
        }
        elseif ($harga < 25000) {
            echo ' dan size Small';
        }
    }
});


Route::get('tni/{nama?}/{beba?}/{umur?}',function($nama=null,$beba=null,$umur=null){
    if (isset($nama)) {
        $nama = 'Nama : '.$nama;
        echo $nama.'<br>';
    }
    if (isset($beba)) {
        $keb = 'Berat Badan : '.$beba.' kg';
        echo $keb;
        if ($beba >= 100) {
            echo ' (Maaf berat badan anda tidak valid)';
        }
        elseif ($beba >=76 && $beba <=100) {
            echo ' (Anda harus menurunkan berat badan anda)';
        }
        elseif ($beba >= 65 && $beba <=75) {
            echo ' (Berat Badan Anda Ideal)';
        }
        elseif ($beba >= 50 && $beba <=64) {
            echo ' (Naikkan Berat badan anda)';
        }
        elseif($beba < 50) {
            echo ' (Anda Kurang Nutrisi)';
        }
    }
    if (isset($umur)) {
        $usia = '<br>Umur : '.$umur.' tahun';
        echo $usia;
        if ($umur < 30) {
            echo ' (Jabatan anda adalah dibawah Perwira)';
        }
        elseif ($umur >= 30 && $umur < 40) {
            echo ' (Jabatan anda adalah Perwira)';
        }
        elseif ($umur >= 40 && $umur < 50) {
            echo ' (Jabatan anda adalah Laksamana)';
        }
        elseif ($umur >= 50 && $umur < 60) {
            echo ' (Jabatan anda adalah Jendral)';
        }
    }
});


// Akses Model Post
Route::get('testmodel/1',function()
{
    // select * from posts
    $query = App\Post::all();
    return $query;
});


Route::get('testmodel/2',function()
{
    // select * from posts
    $query = App\Post::find(1);
    return $query;
});

Route::get('testmodel/3',function()
{
    // select * from posts
    $query = App\Post::where('title','like','%cepat nikah%')->get();
    return $query;
});

Route::get('testmodel/4',function()
{
    // select * from posts
    $post = App\Post::find(1);
    $post->title = "Ciri Keluarga Sakinah";
    $post->save();
    return $post;
});

Route::get('testmodel/5',function()
{
    // select * from posts
    $post = App\Post::find(1);
    $post->delete();
});

Route::get('testmodel/6',function()
{
    // select * from posts
    $post = new App\Post;
    $post->title = "7 Amalan Pembuka Jodoh";
    $post->content = "shalat malam, sedekah, puasa sunah, silaturahmi, senyum, doa, tobat";
    $post->save();
    return $post;
});


Route::get('first',function(){
    $data = App\Biodata::select('id','nama','hobi')
    ->first();
    return $data;
});


Route::get('tiga',function()
{
    // select * from posts
    $query = App\Biodata::all()
    ->take(3);
    ;
    return $query;
});

Route::get('input/{nis}/{nama}/{alamat}/{jenis_kelamin}/{tempat_lahir}/{tanggal_lahir}/{hobi}',function($nis,$nama,$alamat,$jenis_kelamin,$tempat_lahir,$tanggal_lahir,$hobi)
{
    $data = new App\Biodata;
    $data->nis = $nis;
    $data->nama = $nama;
    $data->alamat = $alamat;
    $data->jenis_kelamin = $jenis_kelamin;
    $data->tempat_lahir = $tempat_lahir;
    $data->tanggal_lahir = $tanggal_lahir;
    $data->hobi = $hobi;
    $data->save();
    return $data;
});

Route::get('latihan','LatihanController@halo');
Route::get('tambah/{a?}/{b?}','LatihanController@tambah');
Route::get('kurang/{a?}/{b?}','LatihanController@kurang');
Route::get('kali/{a?}/{b?}','LatihanController@kali');
Route::get('bagi/{a?}/{b?}','LatihanController@bagi');
Route::get('pertambahan/{a?}/{b?}','LatihanController@pertambahan');
Route::get('pengurangan/{a?}/{b?}','LatihanController@pengurangan');
Route::get('perkalian/{a?}/{b?}','LatihanController@perkalian');
Route::get('pembagian/{a?}/{b?}','LatihanController@pembagian');
Route::get('data-1','LatihanController@loop');
Route::get('data-2','LatihanController@data');

// CRUD TABUNGAN
Route::get('tabungan','TabunganController@index');
Route::get('tabungan/{id}','TabunganController@show');
Route::get('tabungan-input/{nis}/{nama}/{kelas}/{jml}','TabunganController@store');
Route::get('tabungan-edit/{id}/{nis}/{nama}/{kelas}/{jml}','TabunganController@edit');
Route::get('tabungan-hapus/{id}','TabunganController@delete');
// Crud Customer
Route::get('customer','CustomerController@index');
Route::get('customer/{id}','CustomerController@show');
Route::get('customer-input/{code}/{nama}/{email}/{country}/{city}/{address}/{contact}','CustomerController@store');
Route::get('customer-edit/{id}/{code}/{nama}/{email}/{country}/{city}/{address}/{contact}','CustomerController@edit');
Route::get('customer-hapus/{id}','CustomerController@delete');

