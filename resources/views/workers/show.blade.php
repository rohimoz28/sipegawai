@extends('layouts/layout')

@section('title', 'Beranda')

@section('content')
    <div class="container">
        <h2 class="my-3">Daftar Pegawai</h2>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $worker->nama }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $worker->nip }}</h6>

                <p class="card-text">Departemen: {{ $worker->departemen }}</p>
                <p class="card-text">Jabatan: {{ $worker->jabatan }}</p>

                <a href="{{ $worker->id }}/edit" class="btn btn-primary">Edit</a>

                <form action="{{ $worker->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>

                <a href="/workers" class="card-link">Kembali</a>
            </div>
        </div>

    </div>
@endsection
