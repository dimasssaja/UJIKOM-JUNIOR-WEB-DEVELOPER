<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{

    public function store(Request $request)
    {
        // mmebuat validasi
        $validated = $request->validate([
            'nama_pegawai'      => [
                'required',
                'string',
                'min:3',
                'max:255'
            ],
            // 'email'     => [
            //     'required',
            //     'email',
            //     'unique:users,email'
            // ],
            // 'password'  => [
            //     'required',
            //     'min:8'
            // ],
            'nomor_telepon' =>[
                'nullable',
            ],
            'alamat' =>[
                'nullable',
            ],
            'foto' =>[
                 'nullable',
                 'image',
                'mimes:jpg,jpeg,png',
                'max:2048'
            ],
            'pendidikan' =>[
                'nullable',
           ],
            'agama' =>[
                'nullable',
            ],
            'gender' =>[
                'nullable',
            ],
            'jabatan' =>[
                'nullable',
            ],
            // 'password_confirmation' => [
            //     'required',
            //     'same:password'
            // ],
            // 'avatar'    => [
            //     'nullable',
            //     'image',
            //     'mimes:jpg,jpeg,png',
            //     'max:2048' // 2MB
            // ]
        ]);

        // unggah avatar
        // if ($request->hasFile('avatar')) {
        //     $avatar = $request->file('avatar');
        //     $avatarPath = $avatar->store('avatars', 'public');

        //     $validated['avatar'] = $avatarPath;
        // }

        // membuat user baru
        $user = Pegawai::create($validated);

        return response()->json([
            'message'   => 'Berhasil menambahkan user baru',
            'data'      => $user
        ], 201);
    }

    public function update(Request $request, string $id)
    {
        // mmebuat validasi
        $validated = $request->validate([
            'nama_pegawai'      => [
                'required',
                'string',
                'min:3',
                'max:255'
            ],
            'nomor_telepon' =>[
                'nullable',
            ],
            'alamat' =>[
                'nullable',
            ],
            'foto' =>[
                 'nullable',
                 'image',
                'mimes:jpg,jpeg,png',
                'max:2048'
            ],
            'pendidikan' =>[
                'nullable',
           ],
            'agama' =>[
                'nullable',
            ],
            'gender' =>[
                'nullable',
            ],
            'jabatan' =>[
                'nullable',
            ],
        ]);

        // membuat user baru
        $user = Pegawai::find($id);
        $user->update($validated);

        return response()->json([
            'message'   => 'Berhasil mengupdate data user',
            'data'      => $user
        ], 200);
    }

    public function destroy(string $id)
    {
        $user = Pegawai::find($id);
        $user->delete();

        return response()->json([
            'message'   => 'Berhasil menghapus data user',
            'data'      => $user
        ], 200);
    }
}
