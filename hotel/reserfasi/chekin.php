<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ./login.php");
} else if ($_SESSION['id_T'] == 1) {
    header('location: ../action/home.php');
}
?>

<head>
    <link rel="stylesheet" href="../reserfasi/chekin.css">
</head>

<body>
    <div>
        <h3>Edit Data Barang</h3>
        <?php
        include '../koneksi.php';
        $id_RS = $_GET['id'];
        $data_barang = mysqli_query($koneksi, "SELECT * from reserfasi where id_rs='$id_RS'");
        while ($tampil = mysqli_fetch_array($data_barang)) {
            ?>
        <form method="post" action="../reserfasi/aksi-checkin.php">
            <table>
                <tr>
                    <td>ID RS</td>
                    <td><input type="number" name="id_RS" value="<?php echo $tampil['id_rs']; ?>" readonly></td>
                </tr>
                <tr>
                    <td>ID Users</td>
                    <td><input type="number" name="id" value="<?php echo $tampil['id_user']; ?>" readonly></td>
                </tr>
                <tr>
                    <td>Lama Inap</td>
                    <td><input type="number" name="stay" value="<?php echo $tampil['stay']; ?>" readonly></td>
                </tr>
                <tr>
                    <td>No Ruang</td>
                    <td><input type="number" name="roomID" value="<?php echo $tampil['roomID']; ?>" readonly></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><input type="number" name="harga" id="harga" value="<?php echo $tampil['harga']; ?>" readonly></td>
                </tr>
                <tr>
                    <td>membayar</td>
                    <td><input id="bayar" type="number" name="bayar" value="" oninput="hitungHasil()"></td>
                    <script>
                    // Fungsi untuk menghitung dan menampilkan hasil perkalian
                    function hitungHasil() {
                        // Mengambil nilai NIS dari input
                        var harga = document.getElementById("harga").value;
                        // Mengambil nilai jenis kasur dari input
                        var bayar = document.getElementById("bayar").value;

                        // Menghitung hasil perkalian dengan harga (yang telah diambil dari PHP)
                        var hasil = bayar - harga;

                        // Menampilkan hasil di elemen dengan id "harga"
                        // document.getElementById("harga").textContent = hasil;
                        // Mengatur nilai input tersembunyi "hasil_kali"
                        document.getElementById("kembalian").value = hasil;
                        console.log(hasil);
                    }
                    </script>
                </tr>
                <tr>
                    <td>kembalian</td>
                    <td><input id="kembalian" type="number" name="kembalian" value="" readonly></td>

                </tr>
                <tr>
                    <td><input type="submit" value="SIMPAN"></td>
                    <td><a class="view-siswa-button" href="table_reserfasi.php">Lihat Reservasi</a></td>
                </tr>
            </table>
        </form>
        <?php
        }
        ?>
    </div>
</body>