<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class Pegawai1Controller extends Controller
{
    public function indexpgw(){
        $users = Pegawai::orderBy('id','asc')->get();

        $data['pegawai'] = $users;


        return view('pages.pegawai.index',$data);
    }
}
