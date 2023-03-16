@extends('minggu3.app')
{{-- TODO: Extend ke view minggu3.app --}}

@section('content')
    <div class="div1">
        <h1>Home Page</h1>
        <p>This is the Home Page</p>
        <p>{{ $nama }}</p>
        {{-- TODO: mengambil nilai nama yang dikirim melalui controller --}}
        <ul>
            {{-- TODO: mengambil nilai pelajaran yang dikirim melalui controller --}}
            @foreach ($pelajaran as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
@endsection
