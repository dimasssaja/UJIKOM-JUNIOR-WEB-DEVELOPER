<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{

    // tambah data
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
        $user = Pegawai::create($validated);

        return response()->json([
            'message'   => 'Berhasil menambahkan data pegawai baru',
            'data'      => $user
        ], 201);
    }

    // update data
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
            'message'   => 'Berhasil mengupdate data pegawai',
            'data'      => $user
        ], 200);
    }

    // hapus data
    public function destroy(string $id)
    {
        $user = Pegawai::find($id);
        $user->delete();

        return response()->json([
            'message'   => 'Berhasil menghapus data pegawai',
            'data'      => $user
        ], 200);
    }
}
