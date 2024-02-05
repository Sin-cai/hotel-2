<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../admin/zenlogin.php");
} else if ($_SESSION['id_T'] == 1) {
    header('location: ../admin/login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ZenHo - Selamat Datang</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="zenadmin.css" />
    <style>
    /* Gaya untuk dropdown */
    .dropdown:hover .dropdown-menu {
        display: block;
    }

    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu .dropdown-menu {
        top: 0;
        left: 100%;
    }
    .bg{
        background-color: rgb(156, 0, 62)
    }
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

        <div class="hero bg text-center py-5">
            <div class="container">
                <h2 class="display-4">
                    Selamat Datang Admin
                </h2>
                
            </div>
        </div>
    </header>

    <section id="beranda" class="py-5">
        <div class="container">
            <h2 class="text-center">Tentang Kami</h2>
            <p class="text-center">
                Disini adalah tempat para admin untuk mengatur semua data yang ada di ZenHo
            </p>
        </div>
    </section>

   

    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2023 ZenHo. Hak Cipta Dilindungi.</p>
                </div>
                <div class="col-md-6 text-right">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="#">Kebijakan Privasi</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Syarat dan Ketentuan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>