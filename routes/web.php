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
