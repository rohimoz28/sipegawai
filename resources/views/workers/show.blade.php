@extends('layouts/layout')

@section('title', 'Beranda')

@section('content')
    <div class="container">
        <h2 class="my-3">Daftar Pegawai</h2>

        <a href="" class="btn btn-success my-3">Tambah Data Pegawai</a>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $worker->nama }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $worker->nip }}</h6>

                <p class="card-text">Departemen: {{ $worker->departemen }}</p>
                <p class="card-text">Jabatan: {{ $worker->jabatan }}</p>

                <button type="submit" class="btn btn-primary">Edit</button>
                <button type="submit" class="btn btn-danger">Hapus</button>
                <a href="/workers" class="card-link">Kembali</a>
            </div>
        </div>

    </div>
@endsection
