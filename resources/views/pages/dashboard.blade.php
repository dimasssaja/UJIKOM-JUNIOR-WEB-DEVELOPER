@extends('dashboard')
{{-- extend untuk mewarisi file utama dari dashboard --}}
@section('content')
    <h3>Dashboard</h3>
    {{-- jika yang login admin tampilkan halaman Administrator, jika yang login user tampilkan halaman User --}}
    @if (auth()->user()->role == 'admin')
        <div >
            <h4 class="text-center"><i class="fas fa-user-shield"></i> Halaman Administrator</i></h4>
            <p>Selamat Datang <strong>{{ auth()->user()->name }}....</strong></p>
            <p>Anda Login sebagai: <strong>{{ auth()->user()->role }}</strong></p>
            <p><strong>Kamu diberi hak akses penuh atas database</strong></p>
        </div>
    @else
        <div >
            <h4 class="text-center"><i class="fas fa-user"></i>Halaman User </h4>
            <p>Selamat Datang <strong>{{ auth()->user()->name }}....</strong></p>
            <p>Anda Login sebagai: <strong>{{ auth()->user()->role }}</strong></p>
            <p><strong>Di Mode User beberapa fitur dibatasi</strong></p>
        </div>
    @endif

    {{-- card ke route view userpgw dan index --}}
    <div class="row mb-4">
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card bg-success text-white h-100">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div class="card-text">Data User</div>
                    <i class="fas fa-users fa-2x"></i>
                </div>
                <div class="card-footer d-flex justify-content-between align-items-center">
                    <a href="{{ route('pegawai.userpgw') }}" class="text-white">More info</a>
                    <i class="fas fa-arrow-circle-right"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card bg-info text-white h-100">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div class="card-text">Data Pegawai</div>
                    <i class="fas fa-users fa-2x"></i>
                </div>
                <div class="card-footer d-flex justify-content-between align-items-center">
                    <a href="{{ route('pegawai.index') }}" class="text-white">More info</a>
                    <i class="fas fa-arrow-circle-right"></i>
                </div>
            </div>
        </div>
    </div>
@endsection
