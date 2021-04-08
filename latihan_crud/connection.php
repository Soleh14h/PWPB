<?php
    $connect = mysqli_connect("localhost", "root", "", "db_program_sederhana");
    if(mysqli_connect_errno()){
        echo "koneksi database gagal:".myqli_connect_error();
    }
?>