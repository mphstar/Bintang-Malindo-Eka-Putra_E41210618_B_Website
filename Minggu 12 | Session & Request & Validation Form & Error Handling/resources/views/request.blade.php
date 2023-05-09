@extends('app')

@section('konten')
    <div class="container">
        <form action="/request/proses" method="post">
            @csrf
            <input class="form-control mt-4 {{ $errors->has('nama') ? "is-invalid" : "" }}" type="text" name="nama" placeholder="Masukkan Nama" value="{{ old('nama') }}">
            @error('nama')
                <div id="validationServer04Feedback" class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

            <input class="form-control mt-4 {{ $errors->has('alamat') ? 'is-invalid' : '' }}" type="text" name="alamat" placeholder="Masukkan Alamat" value="{{ old('alamat') }}">
            @error('alamat')
                <div id="validationServer04Feedback" class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </form>
    </div>
@endsection
