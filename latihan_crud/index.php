<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi CRUD</title>
</head>
<body>
    <h1>Data Siswa</h1>
    <a href="form_tambah.php">+ Tambah Data</a>
    <table border="1" width="100%">
        <tr>
            <th>Foto</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Telepon</th>
            <th>Alamat</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php
            include 'connection.php';
            $sql = mysqli_query($connect, "SELECT * FROM siswa");
            while ($data = mysqli_fetch_array($sql)) {
                echo "<tr>";
                echo "<td><img src='images/".$data['foto']."' width='100' height='100'></td>";
                echo "<td>".$data['nis']."</td>";
                echo "<td>".$data['nama']."</td>";
                echo "<td>".$data['jenis_kelamin']."</td>";
                echo "<td>".$data['telp']."</td>";
                echo "<td>".$data['alamat']."</td>";
                echo "<td><a href='form_edit.php?nis=".$data['nis']."'>Ubah</a></td>";
                echo "<td><a href='action_delete.php?nis=".$data['nis']."'>Hapus</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>