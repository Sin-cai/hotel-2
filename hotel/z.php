<?php
session_start();
if (!isset($_SESSION['email'])) {
} else if ($_SESSION['id_T'] == 2) {
  header('location: ../admin/login.php');
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Hotel ZenHo</title>
   <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
   <link rel="stylesheet" href="zenho.css">

</head>
<body>
    
   

   
   <main class="full">
        <!--/parallax_section_1-->
        <div class="container margin_120_95" id="reservasion">
            <div class="title mb-4">

                <h2 data-cue="slideInUp" data-delay="200">List Reservasi</h2>
            </div>
            <div class="container">
                <div class="row  ">
                    <?php 
                        include "koneksi.php";
                        $id = $_SESSION['id'];
                        $data = mysqli_query($koneksi, "SELECT DISTINCT reserfasi.id_rs, history.id_his,checkout.id_check,reserfasi.id_bed, reserfasi.id_user, reserfasi.stay, reserfasi.checkin, reserfasi.chek_out, reserfasi.harga, bed.type, kamar.nomor_kamar, bed.img FROM reserfasi INNER JOIN bed ON reserfasi.id_bed = bed.id_bed INNER JOIN kamar ON reserfasi.roomID = kamar.roomID LEFT JOIN transaksi on transaksi.id_rs=reserfasi.id_rs LEFT JOIN checkout ON transaksi.id_transaksi=checkout.id_transaksi LEFT JOIN history ON checkout.id_check=history.id_check WHERE id_user='$id'");
                        while ($data1 = mysqli_fetch_array($data)) {
                            $id_bed=$data1['id_bed'];
                            $id_c = $data1["id_check"];
                            $id_H = $data1["id_his"];
                        ?>
                    <div class="col mb-2">
                        <div class="card" style="width: 20.2rem;">
                            <img src="../img/rooms/<?php echo $data1['img']; ?>" class="card-img-top" alt="Room Image">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?php
                                    if ($id_bed == 1) {
                                        echo "SINGLE ROOM";
                                    } elseif ($id_bed == 2) {
                                        echo "DOUBLE ROOM";
                                    }
                                    ?>
                                </h5>
                                <div class="card-text">
                                    <Strong class="mb-1">Jenis Bed: </Strong>
                                    <?php echo $data1['type']; ?>
                                    <br>
                                    <Strong class="mb-1">No Kamar: </Strong>
                                    <?php echo $data1['nomor_kamar']; ?>
                                    <br>
                                    <Strong class="mb-1">Lama Menginap: </Strong>
                                    <?php echo $data1['stay']; ?> Hari<br>
                                    <Strong class="mb-1">Harga: </Strong>Rp <?php echo $data1['harga']; ?>
                                    <br>
                                    <Strong class="mb-1">Checkin: </Strong>
                                    <?php echo $data1['checkin']; ?>
                                    <br>
                                    <Strong class="mb-1">Checkout: </Strong>
                                    <?php echo $data1['chek_out']; ?>
                                    <br>
                                    <?php
                                    if ($id_c !== null) {
                                        $keteranganIn = 'Sudah Checkin';
                                        ?>
                                    <Strong>keterangan Checkin : </Strong>
                                    <?php echo $keteranganIn ?>
                                    <?php if ($id_H !== null){
                                        $keteranganOut = 'Sudah Checkout';
                                    ?>
                                    <Strong>keterangan Checkout : </Strong>
                                    <?php echo $keteranganOut ?>
                                    <?php
                                    }
                                    else{
                                        $keteranganOut = 'Belum Checkout';?>
                                    <Strong>keterangan Checkout : </Strong>
                                    <?php echo $keteranganOut ?>
                                    <?php
                                    }
                                    } else {
                                        $keteranganIn = 'Belum Checkin';
                                        ?>
                                    <Strong>keterangan Checkin : </Strong>
                                    <?php echo $keteranganIn ?>
                                    <br><br>
                                    <center>
                                        <a href="../action/cancel.php?id_RS=<?php echo $data1['id_rs']; ?>"
                                            class="js-scroll-trigger btn_1">Cancel</a>
                                        <a href="./change-date.php?id_RS=<?php echo $data1['id_rs']; ?>"
                                            class="js-scroll-trigger btn_1">Ubah Tanggal</a>
                                    </center>
                                    <?php
                                    }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php }?>
                </div>
            </div>

    </main>


   

   

   </body>
</html>
