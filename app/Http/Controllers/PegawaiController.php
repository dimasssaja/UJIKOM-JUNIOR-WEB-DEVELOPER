<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index(){

        $users = User::orderBy('id','asc')->get();

        $data['pegawai'] = $users;


        return view('pages.pegawai.index',$data);
    }
}
