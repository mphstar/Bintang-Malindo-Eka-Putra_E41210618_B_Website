@extends('app')

@section('title')
    Upload with Resize File Laravel
@endsection

@section('konten')
    <div class="row">
        <div class="container">
            <h2 class="text-center my-5">Upload with Resize File dengan Laravel</h2>
            <div class="col-lg-8 mx-auto my-5">

                {{-- cek jika berhasil --}}
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible">
                        <a href="#" class="close text-decoration-none" data-dismiss="alert" aria-label="close">&times;</a>
                        {{ session('success') }}
                    </div>
                @endif

                {{-- cek jika ada errors --}}
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            {{ $error }} <br />
                        @endforeach
                    </div>
                @endif
                <form action="{{ route('resize.proses') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <b>File Gambar</b>
                        <input type="file" name="file" id="">
                    </div>
                    <div class="form-group">
                        <b>Keterangan</b>
                        <textarea name="keterangan" class="form-control">

                        </textarea>
                    </div>
                    <input type="submit" value="Upload" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
@endsection