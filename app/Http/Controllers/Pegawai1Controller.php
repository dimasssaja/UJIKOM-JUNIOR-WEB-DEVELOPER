<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class Pegawai1Controller extends Controller
{
    // fungsi untuk memanggil data dari pegawai, yang nantinya disimpan ke 'pegawai' dan di panggil di folder akhit pages.pegawai.index
    public function indexpgw(){
        $users = Pegawai::orderBy('id','asc')->get();

        $data['pegawai'] = $users;


        return view('pages.pegawai.index',$data);
    }

    // public function index(){
    //     $pegawaiCount = Pegawai::count();
    //     return view('', compact('pegawaiCount'));
    // }
}

