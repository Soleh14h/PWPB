<?php
    include "connection.php";
    $nis = $_GET['nis'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];

    if(isset($_POST['ubah_foto'])){
        $foto = $_FILES['foto']['name'];
        $tmp = $_FILES['foto']['tmp_name'];
        
        $fotobaru = date('dmYHis').'_'.$foto;
        $path = "images/".$fotobaru;
        if(move_uploaded_file($tmp,$path)){
            $query = "SELECT * FROM siswa WHERE nis='".$nis."'";
            $sql = mysqli_query($connect, $query);
            $data = mysqli_fetch_array($sql);

            if(is_file("images/".$data['foto']))
                unlink("images/".$data['foto']);
            
            $query2 = "UPDATE siswa SET nama='".$nama."',jenis_kelamin='".$jenis_kelamin."', telp='".$telp."', alamat='".$alamat."', foto='".$fotobaru."'";
            $sql2 = mysqli_query($connect, $query2);
            
            if($sql2){
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
    }
    else {
        $query = "UPDATE siswa SET nama='".$nama."',jenis_kelamin='".$jenis_kelamin."', telp='".$telp."', alamat='".$alamat."'";
        $sql = mysqli_query($connect, $query);
        
        if($sql){
            header("location:index.php");
        }
        else {
            echo "Maaf, terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
            echo "<br><a href='index.php'>Kembali ke home</a>";
        }
    }
?>