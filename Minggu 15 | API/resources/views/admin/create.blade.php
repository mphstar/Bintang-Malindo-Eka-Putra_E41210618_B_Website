@extends('admin.app')

@section('main')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Profile Statistics</h3>
        </div>
        <div class="page-content">
            <div class="d-flex justify-content-between mb-4">
                <div class="">

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Pengalaman Kerja</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ isset($data) ? 'Update' : 'Tambah' }}
                            </li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>

        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <h4 class="card-title">{{ isset($data) ? 'Update Data' : 'Create Data' }}</h4>
                    <div class="col-md-12 mt-4 col-12">
                        <div class="card">

                            <form action="{{ isset($data) ? '/home/update/proses' : '/home/create/proses' }}" method="POST"
                                class="form form-vertical">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        @isset($data)
                                            <input type="hidden" class="form-control" name="id"
                                                placeholder="Nama Perusahaan" value="{{ isset($data) ? $data->id : '' }}">
                                        @endisset
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="nama">Nama Perusahaan</label>
                                                <input type="text" id="nama"
                                                    class="form-control @error('nama')
                                                is-invalid
                                                @enderror"
                                                    name="nama" placeholder="Nama Perusahaan"
                                                    value="{{ isset($data) ? $data->nama : '' }}">
                                                @error('nama')
                                                    <div class="invalid-feedback">
                                                        <i class="bx bx-radio-circle"></i>
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="jabatan">Jabatan</label>
                                                <input type="text" id="jabatan"
                                                    class="form-control @error('jabatan')
                                                is-invalid
                                                @enderror"
                                                    name="jabatan" placeholder="Jabatan"
                                                    value="{{ isset($data) ? $data->jabatan : '' }}">
                                                @error('jabatan')
                                                    <div class="invalid-feedback">
                                                        <i class="bx bx-radio-circle"></i>
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="tahun_masuk">Tahun Masuk</label>
                                                <input type="number" id="tahun_masuk"
                                                    class="form-control @error('tahun_masuk')
                                                is-invalid
                                                @enderror"
                                                    name="tahun_masuk" placeholder="Tahun Masuk"
                                                    value="{{ isset($data) ? $data->tahun_masuk : '' }}">
                                                @error('tahun_masuk')
                                                    <div class="invalid-feedback">
                                                        <i class="bx bx-radio-circle"></i>
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="tahun_keluar">Tahun Keluar</label>
                                                <input type="number" id="tahun_keluar"
                                                    class="form-control @error('tahun_keluar')
                                                is-invalid
                                                @enderror"
                                                    name="tahun_keluar" placeholder="Tahun Keluar"
                                                    value="{{ isset($data) ? $data->tahun_keluar : '' }}">
                                                @error('tahun_keluar')
                                                    <div class="invalid-feedback">
                                                        <i class="bx bx-radio-circle"></i>
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                            </div>
                                        </div>

                                        <div class="col-12 d-flex mt-4 justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">
                                                Submit
                                            </button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">
                                                Reset
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-start">
                    <p>2021 &copy; Mazer</p>
                </div>
                <div class="float-end">
                    <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                            href="https://saugi.me">Saugi</a></p>
                </div>
            </div>
        </footer>
    </div>
@endsection
