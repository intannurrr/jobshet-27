<?php
if ($_SERVER['REQUEST METHOD'] == 'POST') {
    //Mendapatkan Nilai Variable
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $kelas = $_POST['kelas'];
    //Pembuatan Syntax SQL
$SQL = "INSERT INTO siswa (nis, nama, jk, kelas)
        VALUES ('$nis', '$nama', '$jk', '$kelas')";
        //import file koneksi database
        require 
        _once('koneksi.php');
        //eksekusi query databasa
        if (mysqli_query($con, $sql)) {
            echo 'berhasil menambah siswa';
        }    else {
            echo 'gagal menambahkan siswa';
        }
        mysqli_close($con);
}