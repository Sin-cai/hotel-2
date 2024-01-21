<?php
    include '../koneksi.php';

    $kamar = $_GET ['id'];
    mysqli_query($koneksi, "DELETE FROM kamar WHERE roomID='$kamar'");
    header("location : index.php");
?>