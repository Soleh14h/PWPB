<?php
    include "connection.php";
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    
    $fotobaru = date('dmYHis').'_'.$foto;
    $path = "images/".$fotobaru;
    if(move_uploaded_file($tmp,$path)){
        $query = "INSERT INTO siswa VALUES('".$nis."','".$nama."','".$jenis_kelamin."','".$telp."','".$alamat."','".$fotobaru."')";
        $sql = mysqli_query($connect, $query);
        if($sql){
            header("location:index.php");
        }
        else {
            echo "Maaf, terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
            echo "<br><a href='index.php'>Kembali ke home</a>";
        }
    }
    else {
        echo "Maaf, gambar gagal di upload";
        echo "<br><a href='form_tambah.php'>Kembali ke form</a>";
    }
?>