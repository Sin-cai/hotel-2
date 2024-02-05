<?php
include '../koneksi.php';

$id_RS = $_POST['id_RS'];
$bayar = $_POST['bayar'];
$kembalian = $_POST['kembalian'];

mysqli_query($koneksi, "INSERT INTO transaksi(id_rs, bayar, kembalian) values ('$id_RS','$bayar','$kembalian') ");
header("location:../admin/login.php");



// echo "id_T= $id_transaksi";
$data = mysqli_query($koneksi, "select * from transaksi where id_rs = '$id_RS'");
while (
    $datao = mysqli_fetch_array ( $data)
) { $idT = $datao ['id_transaksi'];
    mysqli_query($koneksi, "INSERT INTO checkout(id_transaksi) values ('$idT') ");
}

header("location:../resi.php?id=$idT");
// echo"INSERT INTO checkout(id_transaksi) values ('$idT')";
// echo"UPDATE transaksi SET bayar ='$bayar'  WHERE transaksi.id_transaksi ='$idT' "
?>