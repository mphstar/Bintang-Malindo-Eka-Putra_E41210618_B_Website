@extends('app')

@section('konten')
    <div class="container">
        <p>{{ $nama }}</p>
        <a href="/session/create"><button class="btn btn-primary">Tambah</button></a>
        <a href="/session/delete"><button class="btn btn-danger">Hapus</button></a>
    </div>
@endsection