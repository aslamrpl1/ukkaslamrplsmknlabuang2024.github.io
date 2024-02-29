<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <style>
        body {
            background-image:url('as.jpg');
            background-repeat: no-repeat;
           background-size:cover;
            font-family:arial;
        }
    </style>
</head>
<body>
    <h1 style="color:white; text-align:center; padding-top:40px;">Halaman Registrasi</h1>
    <div class="container" style=" margin: 0 auto;  width:400px;">
    <form action= "proses_register.php" method="post">
    <label for="username" style="display:block; color:white; 
    font-weight: bold; padding-top:80px; padding_button:10px; text-align:center;">Username</label>
    <input type="text" name="username" id="username" style="width:100%;">

    <label for="password" style="display:block; color:white;
    font-weight: bold; padding-top:10px; padding-button:10px; text-align:center;">password</label>
    <input type="text" name="password" id="password" style="width:100%;">

    <label for="email" style="display:block; color:white; 
    font-weight: bold; padding-top:10px; padding-button:10px; text-align:center;">Email</label>
    <input type="text" name="email" id="email" style="width:100%;">
    <div class="container" style="padding-top:20px;">

    <label for="namalengkap" style="display:block; color:white; 
    font-weight: bold; padding-top:10px; padding-button:10px; text-align:center;">Nama Lengkap</label>
    <input type="text" name="namalengkap" id="namalengkap" style="width:100%;">

    <label for="alamat" style="display:block; color:white; 
    font-weight: bold; padding-top:10px; padding-button:10px; text-align:center;">Alamat</label>
    <input type="text" name="alamat" id="alamat" style="width:100%;">
    <div class="container" style="padding-top:20px;">
    <td></td>
    <td><input type="submit" value="register" style="text-align:center;"></td>
    </div>
</form>
</div>

</div>
</body>
</html>