<?php
include '../koneksi.php';

$id_RS = $_POST['id_RS'];

mysqli_query($koneksi, "INSERT INTO transaksi(id_rs) values ('$id_RS') ");
header("location:../admin/login.php");
?>