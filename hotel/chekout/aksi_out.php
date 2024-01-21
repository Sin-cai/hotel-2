<?php
include '../koneksi.php';

$id_C = $_GET['idc'];


mysqli_query($koneksi, "INSERT INTO history(id_check) values ('$id_C')  ");
header("location:../admin/login.php");
//echo ("INSERT INTO history(id_C) values ('$id_C') ");
?>