<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserPegawaiController extends Controller
{
    // fungsi untuk memanggil, semua data user dan disortir berdasar id, secara ascending, dan di return pada view
    public function index(){

        $users = User::orderBy('id','asc')->get();

        $data['user'] = $users;

        return view('pages.pegawai.userpgw',$data);
    }
}
