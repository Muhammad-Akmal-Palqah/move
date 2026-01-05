@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="mb-5">
        <h2 class="fw-bold text-dark">Dashboard</h2>
        <p class="text-muted small text-uppercase"> Management Laboratorium</p>
    </div>

    <div class="row g-4">
        <div class="col-md-6 col-lg-4">
            <div class="card card-menu shadow-sm h-100 p-3">
                <div class="card-body d-flex flex-column">
                    <h5 class="fw-bold">Data Jabatan</h5>
                    <p class="text-muted small flex-grow-1">Kelola posisi admin. Saat ini ada <b>{{ $jml_jabatan ?? 0 }}</b> jabatan terdaftar.</p>
                    <a href="{{ route('jabatan.index') }}" class="btn btn-primary btn-sm w-100 mt-3">Ke Halaman Jabatan</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card card-menu shadow-sm h-100 p-3">
                <div class="card-body d-flex flex-column">
                    <h5 class="fw-bold">Data User</h5>
                    <p class="text-muted small flex-grow-1">Manajemen pengguna sistem. Total ada <b>{{ $jml_user ?? 0 }}</b> pengguna aktif.</p>
                    <a href="{{ route('user.index') }}" class="btn btn-primary btn-sm w-100 mt-3">Ke Halaman User</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card card-menu shadow-sm h-100 p-3">
                <div class="card-body d-flex flex-column">
                    <h5 class="fw-bold">Katalog Alat</h5>
                    <p class="text-muted small flex-grow-1">Daftar inventaris alat laboratorium secara detail.</p>
                    <a href="#" class="btn btn-outline-primary btn-sm w-100 mt-3">Buka Katalog</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card card-menu shadow-sm h-100 p-3">
                <div class="card-body d-flex flex-column">
                    <h5 class="fw-bold">Kalender Ketersediaan</h5>
                    <p class="text-muted small flex-grow-1">Pantau jadwal peminjaman alat dan ruangan lab.</p>
                    <a href="#" class="btn btn-outline-primary btn-sm w-100 mt-3">Cek Kalender</a>
                </div>
            </div>
        </div>
        
          <div class="col-md-6 col-lg-4">
            <div class="card card-menu shadow-sm h-100 p-3">
                <div class="card-body d-flex flex-column">
                    <h5 class="fw-bold">Ensiklopedia Rumus</h5>
                    <p class="text-muted small flex-grow-1">Pusat penyimpanan Rumus</p>
                    <a href="#" class="btn btn-outline-primary btn-sm w-100 mt-3">Buka Rumus</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card card-menu shadow-sm h-100 p-3">
                <div class="card-body d-flex flex-column">
                    <h5 class="fw-bold">Repositori Publik</h5>
                    <p class="text-muted small flex-grow-1">Pusat penyimpanan jurnal dan hasil penelitian.</p>
                    <a href="#" class="btn btn-outline-primary btn-sm w-100 mt-3">Lihat Arsip</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card card-menu shadow-sm h-100 p-3">
                <div class="card-body d-flex flex-column">
                    <h5 class="fw-bold">Hall of Fame</h5>
                    <p class="text-muted small flex-grow-1">Data tokoh fisikawan dan penghargaan penelitian.</p>
                    <a href="#" class="btn btn-outline-primary btn-sm w-100 mt-3">Buka Data</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card card-menu shadow-sm h-100 p-3">
                <div class="card-body d-flex flex-column">
                    <h5 class="fw-bold text-primary">Info Event</h5>
                    <p class="text-muted small flex-grow-1">Pengaturan berita dan pengumuman lab terbaru.</p>
                    <a href="#" class="btn btn-outline-primary btn-sm w-100 mt-3">Edit Event</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card card-menu shadow-sm h-100 p-3">
                <div class="card-body d-flex flex-column">
                    <h5 class="fw-bold text-success">Download Modul</h5>
                    <p class="text-muted small flex-grow-1">Manajemen file panduan dan modul praktikum.</p>
                    <a href="#" class="btn btn-outline-success btn-sm w-100 mt-3">Upload Modul</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection