<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tabungan;
class PracticeController extends Controller
{
    //
    public function pass(){
        $data = "Keiza Veronica Navaeh";
        return view('latihan',compact('data'));
    }
    public function pass1(){
        $siswa = [
            ['nama'=>'Queenza','kelas'=>'XI RPL 1'],
            ['nama'=>'Queenra','kelas'=>'XI RPL 2'],
        ];
        return view('latihan1',['data'=>$siswa]);
    }
    public function pass2(){
        $tabungan = Tabungan::all()->take(10);
        return view('latihan2',compact('tabungan'));
    }
}
