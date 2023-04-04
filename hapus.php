<?php
$nis = isset($_GET['nis']) ? $_GET['nis'] : null;
//import file koneksi database
require_once('koneksi.php');
//membuat SQL Query
$sql = "DELETE FROM siswa WHERE nis='$nis';";
//menghapus nilai pada database
if(mysqli_query($con,$sql)){
    echo 'berhasil menghapus data siswa';
} else {
    echo 'gagal menghapus data siswa';
}
mysqli_close($con);