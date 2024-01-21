<!DOCTYPE html>
<html lang="en">
<?php
// Sambungkan ke database (gantilah dengan koneksi sesuai dengan kebutuhan Anda)
include "koneksi.php";

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
session_start();
// Dapatkan data transaksi dari database berdasarkan ID transaksi
if (isset($_GET['id'])) {
    $id_transaksi = $_GET['id'];
    $sql = "SELECT transaksi.*, userr.username,reserfasi.harga FROM transaksi INNER JOIN reserfasi ON transaksi.id_rs=reserfasi.id_rs INNER JOIN userr ON reserfasi.id_user=userr.id_user WHERE id_transaksi = $id_transaksi";
    $result = $koneksi->query($sql);

    if ($result->num_rows > 0) {
        $data_transaksi = $result->fetch_assoc();
    } else {
        die("Transaksi tidak ditemukan");
    }
} else {
    die("ID transaksi tidak diberikan");
}

// Tutup koneksi database
$koneksi->close();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Resi</title>

    <style>
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    .resi-card {
        max-width: 400px;
        margin: 50px auto;
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    h1 {
        text-align: center;
        color: #333;
    }

    p {
        margin: 10px 0;
        color: #555;
    }

    strong {
        color: #000;
    }
    </style>

</head>

<body>
    <div class="resi-card">
        <h1>Resi Pembayaran</h1>
        <p><strong>Nama Pembayar:</strong> <?php echo $data_transaksi['username']; ?></p>
        <p><strong>Nama pekerja:</strong> <?php echo $_SESSION['username']; ?></p>
        <p><strong>Harga:</strong> <?php echo $data_transaksi['harga']; ?></p>
        <p><strong>Membayar:</strong> <?php echo $data_transaksi['bayar']; ?></p>
        <p><strong>Kembalian:</strong> <?php echo $data_transaksi['kembalian']; ?></p>
    </div>
    <script>
    // Tambahkan skrip JavaScript untuk menangani pencetakan jika diperlukan
    window.onload = function() {
        window.print();
    }
    </script>
</body>

</html>