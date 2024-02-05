<html lang="en">
  <head>
    <style>
      .btn_1,
      a,
      a.animated_link,
      a.btn_1,
      a:focus,
      a:hover {
        text-decoration: none;
      }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@easepick/bundle@1.2.1/dist/index.umd.min.js"></script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ZenHO - Selamat Datang</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="..zenadmin.css" />
    <style>
      /* Reset beberapa gaya default */
      body,
      h1,
      h2,
      p,
      div {
        margin: 0;
        padding: 0;
      }
      h3{
        color:#fff
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
        background-color: #007bff;
        /* Warna latar belakang biru modern untuk judul */
        color: #fff;
        /* Warna teks dalam judul */
        padding: 10px;
        /* Tambahkan ruang padding untuk tampilan yang lebih baik */
      }

      /* Gaya tabel */
      .data-table {
        width: 100%;
        border-collapse: collapse;
        background-color: #fff;
        /* Warna latar belakang tabel */
        border: 1px solid #007bff;
        /* Warna border tabel (misalnya, biru) */
        color: rgb(203, 0, 71);
        /* Warna teks dalam tabel */
      }

      .data-table th,
      .data-table td {
        padding: 10px;
        text-align: left;
      }

      /* Gaya baris header tabel */
      .header-row {
        background-color: #007bff;
        /* Warna latar belakang header */
        color: #fff;
        /* Warna teks header */
      }

      /* Gaya baris tabel alternatif */
      .data-table tr:nth-child(even) {
        background-color: #f2f2f2;
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
      form {
        padding: 20px;
        /* Add padding to the form */
        background-color:  rgb(124, 4, 46); 
        /* Background color for the form */
        border-radius: 2rem;
        -webkit-border-radius: 2rem;
        -moz-border-radius: 2rem;
        -ms-border-radius: 2rem;
         -o-border-radius: 2rem;
        /* Rounded corners */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        /* Box shadow for a subtle depth effect */
        margin: 20px;
        text-align: center;
        margin: 0 auto;
        /* Center the form horizontally */
        max-width: 800px;
        /* Adjust the max-width as needed */
        background-color: rgb(203, 0, 71);
      }

      /* Style for the table */
      table {
        width: 100%;
        border-collapse: collapse;
        background-color: rgb(203, 0, 71);
        border: 1px solid #e0e0e0;
      }

      /* Style for table rows */
      tr {
        background-color: rgb(203, 0, 71);
      }

      /* Style for table data cells */
      td {
        color:#fff;
        padding: 10px;
        text-align: left;
      }

      /* Style for input elements */
      input[type="text"],
      input[type="number"],
      input[type="date"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-bottom: 10px;
        transition: border-color 0.3s;
      }

      input[type="text"]:focus,
      input[type="number"]:focus,
      input[type="date"]:focus {
        border-color: #007bff;
      }

      /* Style for select elements */
      select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-bottom: 10px;
        transition: border-color 0.3s;
      }

      select:focus {
        border-color: #007bff;
      }

      /* Style for the submit button */
      input[type="submit"] {
        background-color: #333;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-weight: bold;
        text-transform: uppercase;
        transition: background-color 0.3s;
      }

      input[type="submit"]:hover {
        background-color: rgb(247, 255, 10);
        color: rgb(255, 0, 102);
      }
    </style>
  </head>

  <body>
    <header class="bg-dark text-white">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
          <a class="navbar-brand" href="#">ZenHO</a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
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
        <h3>Add Rooms</h3>

        <form method="post" action="../kamar/kamar.php">
          <table cellpadding="5">
            <tr>
              <td>NO Kamar</td>
              <td>
                <input type="number" name="room" id="room" />
              </td>
            </tr>
            <tr>
              <td>Jenis Kamar kamar</td>
              <td>
                            <select name="jenis" id="kamarDropdown">
                                <option value="" disabled selected>Pilih Kamar</option>
                                <?php
                                include "../koneksi.php";
                                $query = "SELECT * FROM bed ";
                                $result = mysqli_query($koneksi, $query);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $id_bed = $row['id_bed'];
                                    $nama = $row['type'];
                                    // Masukkan nilai harga ke dalam atribut data-harga
                                    echo "<option value='$id_bed' >$nama</option>";
                                }
                                ?>
                            </select>
                        </td>
            </tr>
            <tr>
              <td>
                <input type="submit" value="SIMPAN" id="submit-booking" />
              </td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </body>
</html>
