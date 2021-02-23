<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat CRUD</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="judul">
        <h1>Membuat CRUD dengan PHP dan MYSQLi</h1>
        <h2>Menampilkan data dari database</h2>
    </div>
    <br>
    <a href="index.php">Lihat Semua Data</a>
    <br>
    <h3>Edit Data</h3>
    <?php
        include "koneksi.php";
        $id = $_GET['id'];
        $query_mysql = mysqli_query($koneksi, "SELECT * FROM user1 WHERE id='$id'") or die(mysql_error());
        $nomor = 1;
        while($data = mysqli_fetch_array($query_mysql)){
    ?>
    <form action="update.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $data['id']?>">
                    <input type="text" name="nama" id="nama" value="<?php echo $data['nama']?>">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" id="alamat" value="<?php echo $data['alamat']?>"></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td><input type="text" name="pekerjaan" id="pekerjaan" value="<?php echo $data['pekerjaan']?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
    <?php } ?>
</body>
</html>