<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserPegawaiController extends Controller
{
    public function index(){

        $users = User::orderBy('id','asc')->get();

        $data['user'] = $users;


        return view('pages.pegawai.userpgw',$data);
    }
}
