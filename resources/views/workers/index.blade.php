@extends('layouts/layout')

@section('title', 'Beranda')

@section('content')
    <div class="container">
        <h2 class="my-3">Daftar Pegawai</h2>

        <a href="" class="btn btn-success my-3">Tambah Data Pegawai</a>

        <ul class="list-group col-7">
            @foreach($workers as $worker)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $worker->nama }}
                <span class="badge badge-primary badge-pill">Detail</span>
            </li>
            @endforeach
        </ul>
    </div>
@endsection
