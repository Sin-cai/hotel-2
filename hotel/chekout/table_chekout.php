
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ZenHo - Selamat Datang</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../admin/zenadmin.css" />
    <style>
    /* Reset beberapa gaya default */
    body,
    h1,
    h2,
    h3,
    p,
    div {
        margin: 0;
        padding: 0;
    }

    /* Mengatur tampilan latar belakang dan font dasar */
    body {
        font-family: Arial, sans-serif;
        background: rgb(156, 0, 62);
        /* Warna latar belakang bergradasi */
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100vh;

    }

    .full {
        min-height: 92%;
    }

    /* Gaya judul halaman */
    h1 {
        text-align: center;
        padding: 20px;
        background-color: #333;
        color: #fff;
        margin: 0;
    }

    /* Gaya kontainer tabel */
    .containerT {
        background-color: rgb(124, 4, 46);
        padding: 20px;
        border-radius: 2rem;
        -webkit-border-radius: 2rem;
        -moz-border-radius: 2rem;
        -ms-border-radius: 2rem;
         -o-border-radius: 2rem;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin: 20px;
        text-align: center;
        margin: 0 auto;
        /* Add this line to center the content horizontally */
        max-width: 800px;
        /* Adjust the max-width as needed */
    }

    /* Gaya judul tabel */
    .table-title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
        border-radius: 2rem;
        -webkit-border-radius: 2rem;
        -moz-border-radius: 2rem;
        -ms-border-radius: 2rem;
        -o-border-radius: 2rem;
        background-color: rgb(203, 0, 71);
        /* Warna latar belakang biru modern untuk judul */
        color: rgb(247, 255, 10);
        /* Warna teks dalam judul */
        padding: 10px;
        /* Tambahkan ruang padding untuk tampilan yang lebih baik */
    }

    /* Gaya tabel */
    .data-table {
        width: 100%;
        border-collapse: collapse;
        background-color: rgb(156, 0, 62);
        /* Warna latar belakang tabel */
        border: 1px solid ;
        border-color: rgb(255, 0, 102);
        /* Warna border tabel (misalnya, biru) */
        color: #fff;
        /* Warna teks dalam tabel */
    }

    .data-table th,
    .data-table td {
        padding: 10px;
        text-align: left;
    }

    /* Gaya baris header tabel */
    .header-row {
        background-color: rgb(255, 0, 102);
        /* Warna latar belakang header */
        color: rgb(247, 255, 10)    ;
        /* Warna teks header */
    }

    /* Gaya baris tabel alternatif */
    .data-table tr:nth-child(even) {
        
        background-color: rgb(156, 0, 62);
    }

    /* Gaya data dalam tabel */
    .data-table tr.data-row:hover {
        background-color: #d5dbdb;
        /* Warna latar belakang saat dihover */
    }

    .hh {
        min-height: 7%;
    }

    /* Gaya tombol Tambahkan data baru */
    </style>
</head>

<body>
    <header class="bg-dark text-white">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#">ZenHo</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                            <a class="nav-link" href="../admin/zenadmin.php">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../kamar/ramak.php">Kamar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../transaksi.php">Transaksi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../reserfasi/table_chekin.php">Checkin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../chekout/table_chekout.php">Checkout</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../reserfasi/reservasi.php">Reservasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../admin/logout.php">logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="full">
        <div class="containerT content w-full">
            <div class="table-title">Data Checkout</div>
            <table class="data-table" border="1" cellpadding="5">
                <tr class="header-row">
                    <td>ID RS</td>
                    <td>ID Users</td>
                    <td>Keterangan</td>
                    <td>Checkout</td>
                </tr>
                <?php
            include "../koneksi.php";
            $data = mysqli_query($koneksi, "SELECT * FROM checkout");
            while ($data1 = mysqli_fetch_array($data)) {
                $id_c = $data1["id_check"];
                $check_query = mysqli_query($koneksi, "SELECT * FROM history WHERE id_check = $id_c");
                $keterangan = mysqli_num_rows($check_query) > 0 ? 'Sudah Checkout' : 'Belum Checkout'; ?>

                <tr>
                    <td>
                        <?php echo $data1["id_check"] ?>
                    </td>
                    <td>
                        <?php echo $data1["id_transaksi"] ?>
                    </td>
                    <td>
                        <?php echo $keterangan ?>
                    </td>
                    <td>
                        <?php if ($keterangan !== 'Sudah Checkout') { ?>
                        <a href="../chekout/aksi_out.php?idc=<?php echo $data1['id_check']; ?> & idrs=<?php echo $data1['id_transaksi'] ?>">Checkout</a>
              <?php } else { ?>
              Sudah Checkout
              <?php } ?>
            </td>
          </tr>
          <?php
            }
            ?>
        </table>
      </div>
    </div>
  </body>
</html>