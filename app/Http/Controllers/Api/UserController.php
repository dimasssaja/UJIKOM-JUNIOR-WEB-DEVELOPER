<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * menampilkan data.
     */
    public function index()
    {
        $users = User::orderBy('id', 'asc')->get();
        return response()->json([
            'message'   => 'Berhasil menampilkan data user',
            'data'      => $users
        ], 200);
    }

    /**
     * menambahkan data.
     */
    public function store(Request $request)
    {
        // mmebuat validasi
        $validated = $request->validate([
            'name'      => [
                'required',
                'string',
                'min:3',
                'max:255'
            ],
            'email'     => [
                'required',
                'email',
                'unique:users,email'
            ],
            'password'  => [
                'required',
                'min:8'
            ],
            'role' =>[
                'required',
                'in:admin,user'
            ],
        ]);

        // membuat user baru
        $user = User::create($validated);

        return response()->json([
            'message'   => 'Berhasil menambahkan user baru',
            'data'      => $user
        ], 201);
    }

    /**
     * menampilkan data berdasarkan id.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        return response()->json([
            'message'   => 'Berhasil menampilkan detail user',
            'data'      => $user
        ], 200);
    }

    /**
     * mengupdata data berdasarkan id.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name'      => [
                'required',
                'string',
                'min:3',
                'max:255'
            ],
            'email'     => [
                'required',
                'email',
                'unique:users,email'
            ],
            'password'  => [
                'required',
                'min:8'
            ],
            'role' =>[
                'required',
                'in:admin,user'
            ],
        ]);

        // jika ada password baru, maka update password
        if ($request->filled('password')) {
            $validated['password'] = bcrypt($validated['password']);
        }else{
            unset($validated['password']);
        }

        $user = User::find($id);
        $user->update($validated);

        return response()->json([
            'message'   => 'Berhasil mengupdate data user',
            'data'      => $user
        ], 200);
    }

    /**
     * Delete berdasarkan id data.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();

        return response()->json([
            'message'   => 'Berhasil menghapus data user',
            'data'      => $user
        ], 200);
    }
}
