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
        
        
        <form action="/checklogin" method="POST">
            
            <?php echo csrf_field(); ?>
            <h1>Login Page</h1>
            <input name="username" placeholder="Masukkan Username" type="text">
            <input name="password" placeholder="Masukkan Password" type="password">
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html><?php /**PATH /home/mphstar/Development/Workshop Web/Minggu 2 | Routing/resources/views/login.blade.php ENDPATH**/ ?>