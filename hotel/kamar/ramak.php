

<html lang="en">

<head>
    <style>
    .btn_1,
    a.btn_1 {
        border: none;
        color: #fff;
        background: rgb(156, 0, 62);
        outline: 0;
        cursor: pointer;
        display: inline-flex;
        padding: 14px 25px;
        font-weight: 600;
        transition: 0.3s ease-in-out;
        border-radius: 25px;
        align-items: center;
        justify-content: center;
        line-height: 1;
    }

    .btn_1,
    a.btn_1:hover {
        color: rgb(247, 255, 10);
        text-decoration: none;
        background-color: rgb(255, 0, 89);
    }
    </style>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hotel XYZ - Selamat Datang</title>
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
            <!-- Tambahkan class "content" di sini -->
            <div class="table-title">Data Kamar</div>
            <table class="data-table" border="1" cellpadding="5">
                <tr class="header-row">
                    <td>NO Kamar</td>
                    <td>Jenis Kamar</td>
                    <td>Keterangan  </td>

                </tr>
                <?php
                        include "../koneksi.php";

                        // Mengambil semua data kamar dan bed
                        $data = mysqli_query($koneksi, "SELECT *     FROM kamar JOIN bed ON kamar.id_bed = bed.id_bed");

                        while ($data1 = mysqli_fetch_array($data)) {
                            $id_kamar = $data1["roomID"];

                            // Memeriksa apakah id_k dari kamar terhubung di tabel reservasi
                            $check_query = mysqli_query($koneksi, "SELECT * FROM reserfasi WHERE roomID = $id_kamar");

                            if (mysqli_num_rows($check_query) > 0) {
                                $id_reservasi = mysqli_fetch_assoc($check_query)["id_rs"];
                                $checkout_query1 = mysqli_query($koneksi, "SELECT * FROM checkout WHERE id_transaksi = $id_reservasi");

                                if (mysqli_num_rows($checkout_query1) > 0) {
                                    // Jika ada checkout yang terhubung, periksa apakah ada di tabel history
                                    $id_checkout = mysqli_fetch_assoc($checkout_query1)["id_check"];
                                    $history_query = mysqli_query($koneksi, "SELECT * FROM history WHERE id_check = $id_checkout");

                                    if (mysqli_num_rows($history_query) > 0) {
                                        $keterangan = 'Tersedia';
                                    } else {
                                        $keterangan = 'Tidak Tersedia';
                                    }
                                } else {
                                    $keterangan = 'Sudah di reservasi';
                                }
                            } else {
                                $keterangan = 'Tersedia';
                            }
                            ?>
                <tr>
                    <td>
                        <?php echo $data1["nomor_kamar"] ?>
                    </td>
                    <td>
                        <?php echo $data1["type"] ?>
                    </td>
                    <td>
                        <?php if ($keterangan == 'Tersedia') { ?>
                        <a
                            href="../reserfasi/reservasi.php?id=<?php echo $data1['id_bed'] ?>& id_1=<?php echo $data1['roomID']; ?>">Tersedia</a>
                        <?php } elseif ($keterangan == 'Sudah di reservasi') { ?>
                        Sudah Direservasi
                        <?php } else {?> Tidak Tersedia <?php } ?>
                    </td>
                </tr>
                <?php
                        }
                ?>
            </table>
            <br>
            <a id="Book" href="../kamar/tambah.php" class="btn_1">Add Rooms</a>
        </div>
    </div>
</body>

</html>