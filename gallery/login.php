<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
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
    <h1 style="color:white; text-align:center; padding-top:40px;">Halaman Login</h1>
    <div class="container" style=" margin: 0 auto;  width:400px;">
    <form action= "proses_login.php" method="post">
    <label for="username" style="display:block; color:white; 
    font-weight: bold; padding-top:80px; padding_button:10px; text-align:center;">Username</label>
    <input type="text" name="username" id="username" style="width:100%;">

    <label for="password" style="display:block; color:white; 
    font-weight: bold; padding-top:10px; padding-button:10px; text-align:center;">password</label>
    <input type="text" name="password" id="password" style="width:100%;">
    <div class="container" style="padding-top:20px;">
    <td></td>
    <td><input type="submit" value="login" style="text-align:center;"></td>

</form>
</div>

</div>
</body>
</html>