<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tabungan;
class TabunganController extends Controller
{
    //
    public function index(){
        // $tabungan = \App\Tabungan::all();
        $tabungan = Tabungan::all();
        return $tabungan;
    }

    public function show($id){
        // $tabungan = \App\Tabungan::findOrFail($id);
        $tabungan = Tabungan::findOrFail($id);
        return $tabungan;
    }

    public function store($nis=null, $nama=null, $kelas=null, $jml=null){
        $tabungan = new Tabungan();
        $tabungan->nis = $nis;
        $tabungan->nama = $nama;
        $tabungan->kelas = $kelas;
        $tabungan->jml = $jml;
        $tabungan->save();
        return $tabungan;
    }

    public function edit($id=null, $nis=null, $nama=null, $kelas=null, $jml=null){
        $tabungan = Tabungan::findOrFail($id);
        $tabungan->nis = $nis;
        $tabungan->nama = $nama;
        $tabungan->kelas = $kelas;
        $tabungan->jml = $jml;
        $tabungan->save();
        return $tabungan;
    }

    public function delete($id){
        $tabungan = Tabungan::findOrFail($id);
        $tabungan->delete();
        return $tabungan;
    }
}
