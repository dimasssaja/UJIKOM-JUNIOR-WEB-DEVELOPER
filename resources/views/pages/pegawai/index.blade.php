@extends('dashboard')

@section('content')
    <h2>Pegawai</h2>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Foto</th>
                <th scope="col">Nama</th>
                <th scope="col">email</th>
                <th scope="col">nomor_Telepon</th>
                <th scope="col">alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pegawai as $pgw)
                <tr>
                    <td>{{$pgw->id}}</td>
                    <td>
                        <img src="" alt="">
                    </td>
                    <td>{{$pgw->name}}</td>
                    <td>{{$pgw->email}}</td>
                    <td>{{$pgw->nomor_telepon}}</td>
                    <td>{{$pgw->alamat}}</td>
                </tr>
            @endforeach
    </table>
@endsection
