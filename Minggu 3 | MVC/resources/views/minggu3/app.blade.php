<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
</head>
<body>
    <div>
        <div class="container">
            @yield('content')
            {{-- TODO: Yield digunakan untuk memberikan ruang yang bisa dipakai untuk isi kontennya nanti --}}
        </div>
    </div>
    
</body>
</html>