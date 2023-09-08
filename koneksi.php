<?php
$koneksi = mysqli_connect("localhost","root","","login");
//cek koneksi
if (mysqli_connect_error()) {
    echo "koneksi data base gagal:", mysqli_connect_error();
}else{
    echo "berhasil";
}
?>