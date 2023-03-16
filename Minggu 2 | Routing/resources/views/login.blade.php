<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Login</title>
</head>
<body>
    <div>
        {{-- TODO: ketika form tersebut tersubmit maka akan menuju rute post checklogin --}}
        {{-- TODO: dimana nanti data yang dikirim pada form dapat ditampilkan --}}
        <form action="/checklogin" method="POST">
            {{-- TODO: Pada laravel, wajib menambahkan @csrf pada form --}}
            @csrf
            <h1>Login Page</h1>
            <input name="username" placeholder="Masukkan Username" type="text">
            <input name="password" placeholder="Masukkan Password" type="password">
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>