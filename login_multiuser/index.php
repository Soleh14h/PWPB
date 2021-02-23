<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Login Multi User Dengan PHP dan MYSQLi</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <h1>Membuat Login Multi User Dengan PHP dan MYSQLi <br>SMKN 7 Baleendah</h1>
    <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo "<div class='alert'>Username dan Password tidak sesuai</div>";
            }
        }
    ?>
    <div class="kotak-login">
        <p class="tulisan-login">Silahkan Login</p>
        <form action="cek_login.php" method="post">
            <label for="Username">Username</label>
            <input required type="text" name="username" id="username" class="form-login" placeholder="Username...">
            <label for="Password">Password</label>
            <input type="password" name="password" id="password" class="form-login" placeholder="Password..." required>
            <input type="submit" value="LOGIN" class="tombol-login">
            <br><br>
        </form>
    </div>
</body>
</html>