<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi CRUD</title>
</head>
<body>
    <h1>Ubah Data Siswa</h1>
    <?php
        include "connection.php";
        $nis = $_GET['nis'];
        $query = "SELECT * FROM siswa WHERE nis='".$nis."'";
        $sql = mysqli_query($connect, $query);
        $data = mysqli_fetch_array($sql);
    ?>
    <form action="action_edit.php?nis=<?php echo $nis?>" enctype="multipart/form-data" method="post">
        <table cellpadding="8">
            <tr>
                <td>NIS</td>
                <td><input type="text" name="nis" value="<?php echo $data['nis']?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $data['nama']?>"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <?php
                        if($data['jenis_kelamin'] == "Laki-laki"){
                            echo "<input type='radio' name='jenis_kelamin' checked value='Laki-laki'> Laki - laki";
                            echo "<input type='radio' name='jenis_kelamin' value='Perempuan'> Perempuan";
                        }
                        else {
                            echo "<input type='radio' name='jenis_kelamin' value='Laki-laki'> Laki - laki";
                            echo "<input type='radio' name='jenis_kelamin' checked value='Perempuan'> Perempuan";    
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td><input type="text" name="telp" value="<?php echo $data['telp']?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" cols="30" rows="10"><?php echo $data['alamat']?></textarea></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td>
                    <input type="checkbox" name="ubah_foto" value="true">Ceklis jika ingin mengubah foto <br>
                    <input type="file" name="foto">
                </td>
            </tr>
        </table>
        <hr>
        <input type="submit" value="Ubah">
        <a href="index.php"><input type="button" value="Batal"></a>
    </form>
</body>
</html>