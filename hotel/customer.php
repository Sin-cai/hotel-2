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

   

   <header class="header">

      <a href="#" class="logo"> <img src="logo1.png" width="50" height="50" alt=""></i> ZENHO </a>

      <nav class="navbar">
         <a href="#home">home</a>
         <a href="#about">about</a>
         <a href="#room">room</a>
         <a href="#gallery">gallery</a>
         <a href="#review">review</a>
         <a class="nav-link" href="./admin/logout.php">logout</a>
         <a href="#reservation" class="btn"> book now</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </header>

   

   <section class="home" id="home">

      <div class="swiper home-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background: url(home1.jpg) no-repeat;">
               <div class="content">
                  <h3>it's where dreams come true</h3>
                  <a href="#" class="btn"> visit our offer</a>
               </div>
            </div>

            <div class="swiper-slide slide" style="background: url(home2.jpg) no-repeat;">
               <div class="content">
                  <h3>it's where dreams come true</h3>
                  <a href="#" class="btn"> visit our offer</a>
               </div>
            </div>

            <div class="swiper-slide slide" style="background: url(home2.avif) no-repeat;">
               <div class="content">
                  <h3>it's where dreams come true</h3>
                  <a href="#" class="btn"> visit our offer</a>
               </div>
            </div>

            <div class="swiper-slide slide" style="background: url(suite.jpg) no-repeat;">
               <div class="content">
                  <h3>it's where dreams come true</h3>
                  <a href="#" class="btn"> visit our offer</a>
               </div>
            </div>

         </div>

         <div class="swiper-button-next"></div>
         <div class="swiper-button-prev"></div>

      </div>

   </section>

   

   <section class="availability">

      <form action="">

         <script src="handle.date.js"></script>
         <div class="box">
            <p>check in <span>*</span></p>
            <input type="date" class="input" id="checkIn">
         </div>

         <div class="box">
            <p>check out <span>*</span></p>
            <input type="date" class="input" id="checkOut">
         </div>

         <div class="box">
            <p>adults <span>*</span></p>
            <select name="adults" id="" class="input">
               <option value="1">1 adults</option>
               <option value="2">2 adults</option>
               <option value="3">3 adults</option>
               <option value="4">4 adults</option>
               <option value="5">5 adults</option>
               <option value="6">6 adults</option>
            </select>
         </div>

         <div class="box">
            <p>children <span>*</span></p>
            <select name="child" id="" class="input">
               <option value="0">0 child</option>
               <option value="1">1 child</option>
               <option value="2">2 child</option>
               <option value="3">3 child</option>
               <option value="4">4 child</option>
               <option value="5">5 child</option>
               <option value="6">6 child</option>
               <option value="6">7 child</option>
            </select>
         </div>

         <div class="box">
            <p>rooms <span>*</span></p>
            <select name="rooms" id="" class="input">
               <option value="1">1 rooms</option>
               <option value="2">2 rooms</option>
               <option value="3">3 rooms</option>
               <option value="4">4 rooms</option>
               <option value="5">5 rooms</option>
               <option value="6">6 rooms</option>
            </select>
         </div>

         <input type="submit" value="check availability" class="btn">

      </form>

   </section>

   

   <section class="about" id="about">

      <div class="row">

         <div class="image">
            <img src="home.jpg" alt="">
         </div>

         <div class="content">
            <h3>about us</h3>
            <p>Hotel kami adalah tempat yang sempurna untuk menikmati kenyamanan dan layanan berkualitas tinggi di destinasi yang indah.
                Di hotel kami, Anda akan menemukan kenyamanan modern yang dipadukan dengan keramahan tim profesional kami. Hotel kami memiliki lokasi strategis yang memberikan akses mudah ke tempat-tempat wisata terkenal, restoran, dan pusat perbelanjaan. Fasilitas berkualitas tinggi, termasuk kolam renang, restoran mewah, dan spa, akan menjadikan pengalaman menginap Anda istimewa.</p>
            <p>Hotel kami juga memiliki fasilitas berkualitas tinggi, termasuk kolam renang, restoran mewah, dan spa, akan menjadikan pengalaman menginap Anda istimewa. Kami hadir untuk membuat setiap kunjungan Anda menjadi liburan yang mengesankan dan tak terlupakan.</p>
         </div>

      </div>

   </section>

   

   <section class="room" id="room">

      <h1 class="heading">our room</h1>

      <div class="swiper room-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               <div class="image">
                  <span class="price">Rp 1.000.000/night</span>
                  <img src="standart.jpeg" alt="">
                  <a href="#" class="fas fa-shopping-cart"></a>
               </div>
               <div class="content">
                  <h3>STANDART ROOM</h3>
                  <p>Standart room memiliki fasilitas,tempat tidur, AC, TV, perlengkapan mandi, dan air minum.</p>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
                  <a href="#reservation" class="btn">book now</a>
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="image">
                  <span class="price">Rp 2.500.000/night</span>
                  <img src="super.png" alt="">
                  <a href="#reservation" class="fas fa-shopping-cart"></a>
               </div>
               <div class="content">
                  <h3>SUPERIOR</h3>
                  <p>Superior Room menawarkan ukuran ruangan yang lebih luas dari Standard Room.</p>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
                  <a href="#reservation" class="btn">book now</a>
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="image">
                  <span class="price">Rp 6.000.000/night</span>
                  <img src="family.webp" alt="">
                  <a href="#reservation" class="fas fa-shopping-cart"></a>
               </div>
               <div class="content">
                  <h3>FAMILY ROOM</h3>
                  <p>kamar hotel secara khusus para tamu yang ingin menginap bersama dua orang lebih. </p>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i> 
                  </div>
                  <a href="#reservation" class="btn">book now</a>
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="image">
                  <span class="price">Rp 10.000.000/night</span>
                  <img src="suite.jpg" alt="">
                  <a href="#reservation" class="fas fa-shopping-cart"></a>
               </div>
               <div class="content">
                  <h3>SUITE ROOM</h3>
                  <p>kamar ini memiliki fasilitas yang bagus. Bahkan bisa menemukan mini pantry </p>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
                  <a href="#reservation" class="btn">book now</a>
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="image">
                  <span class="price">Rp 4.500.000/night</span>
                  <img src="konek.webp" alt="">
                  <a href="#reservation" class="fas fa-shopping-cart"></a>
               </div>
               <div class="content">
                  <h3>CONNECTING ROOM</h3>
                  <p> buat kamu yang menginap bersama rombongan, tapi tetap ingin terhubung</p>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
                  <a href="#reservation" class="btn">book now</a>
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="image">
                  <span class="price">Rp 1.500.000/night</span>
                  <img src="disabled.webp" alt="">
                  <a href="#reservation" class="fas fa-shopping-cart"></a>
               </div>
               <div class="content">
                  <h3>DISABLED ROOM</h3>
                  <p>kamar hotel yang disediakan khusus bagi para tamu yang mempunyai keterbatasan. </p>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
                  <a href="#reservation" class="btn">book now</a>
               </div>
            </div>

            

         </div>

         <div class="swiper-pagination"></div>

      </div>

   </section>

   

   <section class="services">

      <div class="box-container">

         <div class="box">
            <img src="icon swim.png" alt="">
            <h3>swimming pool</h3>
         </div>

         <div class="box">
            <img src="icon eat.png" alt="">
            <h3>food & drink</h3>
         </div>

         <div class="box">
            <img src="icon restaurant.png" alt="">
            <h3>restaurant</h3>
         </div>

         <div class="box">
            <img src="icon gym.png" alt="">
            <h3>fitness</h3>
         </div>

         <div class="box">
            <img src="icon facial-massage.png" alt="">
            <h3>beauty spa</h3>
         </div>

         <div class="box">
            <img src="icon sunbed.png">
            <h3>resort beach</h3>
         </div>

      </div>

   </section>

   

   <section class="gallery" id="gallery">

      <h1 class="heading">our gallery</h1>

      <div class="swiper gallery-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               <img src="galery3.avif" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="galery4.avif" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="galery5.avif" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="galery6.avif" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="galery7.avif" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="galery1.avif" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

         </div>

      </div>

   </section>

   

   <section class="review" id="review">

      <div class="swiper review-slider">
         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               <h2 class="heading">client's review</h2>
               <i class="fas fa-quote-right"></i>
               <p>Saya sangat menikmati pengalaman menginap di hotel ini. Pelayanan yang luar biasa, kamar yang luas, dan fasilitas yang lengkap. Semua staf sangat ramah dan membantu. Lokasi hotel yang strategis membuat saya mudah mengakses tempat-tempat wisata terkenal. Saya pasti akan kembali</p>
               <div class="user">
                  <img src="review 1.jpg" alt="">
                  <div class="user-info">
                     <h3>Jibril</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                     </div>
                  </div>
               </div>
            </div>

            <div class="swiper-slide slide">
               <h2 class="heading">client's review</h2>
               <i class="fas fa-quote-right"></i>
               <p>Hotel ini benar-benar memahami bagaimana melayani tamu dengan baik. Setiap anggota staf selalu siap membantu dan menjawab pertanyaan. Kamar saya selalu bersih dan nyaman. Sarapan pagi yang lezat adalah bonus tambahan. Sangat direkomendasikan.</p>
               <div class="user">
                  <img src="review 2.jpg" alt="">
                  <div class="user-info">
                     <h3>Farid</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                     </div>
                  </div>
               </div>
            </div>

            <div class="swiper-slide slide">
               <h2 class="heading">client's review</h2>
               <i class="fas fa-quote-right"></i>
               <p>Saya mencari tempat yang tenang untuk menginap dan hotel ini memenuhi harapan saya. Terletak di lingkungan yang damai dan dekat dengan alam, saya merasa sangat rileks selama menginap di sini. Kamar-kamarnya juga sangat nyaman, dengan pemandangan indah.</p>
               <div class="user">
                  <img src="review 3.jpg" alt="">
                  <div class="user-info">
                     <h3>Rifa</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                     </div>
                  </div>
               </div>
            </div>

            <div class="swiper-slide slide">
               <h2 class="heading">client's review</h2>
               <i class="fas fa-quote-right"></i>
               <p>Kami pergi bersama keluarga besar dan hotel ini sempurna untuk kami. Ada banyak fasilitas untuk anak-anak, seperti kolam renang dan taman bermain. Kami juga menikmati makan malam di restoran hotel yang sangat lezat. Semua orang dalam keluarga senang dengan pengalaman menginap ini.</p>
               <div class="user">
                  <img src="review 4.jpg" alt="">
                  <div class="user-info">
                     <h3>Syahrul</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                     </div>
                  </div>
               </div>
            </div>

            

         </div>
         <div class="swiper-pagination"></div>
      </div>

   </section>

   

   <section class="reservation" id="reservation">

      <h1 class="heading">book now</h1>

      <form action="./reserfasi/input_reservasi.php">

         <div class="container">

            <div class="box">
               <p>Jumlah Orang <span>*</span></p>
               <input type="number" class="input" id="orang" placeholder="Jumlah Orang">
            </div>

            <div class="box">
               <p>Jumlah Kamar <span>*</span></p>
               <input type="number" class="input" id="ruang" oninput="hitungHasil()" placeholder="Jumlah Kamar">
            </div>

            <div class="box">
               <p>Lama Inap <span>*</span></p>
               <input type="number" class="input" id="lama" oninput="hitungHasil()" placeholder="Stay">
            </div>

            
            <div class="box">
               <p>check in <span>*</span></p>
               <input type="date" id="tgl" class="input">
            </div>

            <div class="box">
               <p>Jenis Kamar <span>*</span></p>
               
                            <select name="kasur" id="kasur" onchange="hitungHasil()">
                                <option value="" disabled selected>Pilih Jenis Kamar</option>
                                <?php
                        // Koneksi ke database
                        include "koneksi.php";

                        // Query untuk mengambil data id_bed, jenis, dan harga dari bed
                        $query = "SELECT id_bed, type, harga FROM bed";
                        $result = mysqli_query($koneksi, $query);
                        $jenisSelec = "";
                        if (!empty($_GET['id'])) {
                            $jenisSelec = $_GET['id'];
                        }
                        // Loop untuk membuat opsi dropdown
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id_bed = $row['id_bed'];
                            $jenis = $row['type'];
                            $harga = $row['harga'];
                            $selected = " ";
                            if ($id_bed == $jenisSelec)
                                $selected = "selected";

                            // Masukkan nilai harga ke dalam atribut data-harga
                            echo "<option value='$id_bed' data-harga='$harga' " . $selected . ">$jenis</option>";
                        }

                  ?>
                            </select>

                            <script>
                            // Fungsi untuk menghitung dan menampilkan hasil perkalian
                            function hitungHasil() {
                                // Mengambil nilai NIS dari input
                                var nis = document.getElementById("lama").value;
                                // Mengambil nilai jenis kasur dari input
                                var kasur = document.getElementById("kasur");
                                var kamar =document.getElementById("ruang").value;
                                var harga =
                                    kasur.options[kasur.selectedIndex].getAttribute(
                                        "data-harga"
                                    );

                                // Menghitung hasil perkalian dengan harga (yang telah diambil dari PHP)
                                var hasil = nis * harga * kamar;

                                // Menampilkan hasil di elemen dengan id "harga"
                                var input = document.getElementById("harga");
                                input.placeholder=hasil;
                                // Mengatur nilai input tersembunyi "hasil_kali"
                                // document.getElementById("hasil_kali").value = hasil;
                                
                                // console.log(kasur);
                                console.log("lama="+nis);
                                console.log("harga="+harga);
                                console.log("kamar="+kamar);
                                console.log(hasil);
                            }
                     
                            </script>
                      
            </div>

            <div class="box">
               <p>Nomor Kamar <span>*</span></p>
               
                            <select name="kamar" id="kamarDropdown">
                            <option value="" disabled selected>Pilih Kamar</option>
                                <?php
                        if (!empty($_GET['id'])) {

                            $id_bed = $_GET['id'];

                            $query = "SELECT bed.id_bed, kamar.roomID, kamar.nomor_kamar FROM kamar INNER JOIN bed ON bed.id_bed = kamar.id_bed LEFT JOIN reserfasi ON kamar.roomID = reserfasi.roomID LEFT JOIN checkout ON checkout.id_RS=reserfasi.id_RS WHERE checkout.id_RS IS NULL and bed.id_bed=" . $id_bed;
                            $result = mysqli_query($koneksi, $query);
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id_k = $row['roomID'];
                                $nama = $row['nomor_kamar'];
                                $selected = " ";

                                if ($_GET['id_1'] == $row['roomID']) {
                                    $selected = "selected";
                                }

                                // Masukkan nilai harga ke dalam atribut data-harga
                                echo "<option value='$id_k'  " . $selected . ">$nama</option>";
                            }
                        } 
                  ?>
                  </select>

               <div class="box">
                  <input type="number" id="harga" placeholder="Price" disabled>
               </div>

                      
            </div>
   
         </div>

         <input type="submit" id="submit-booking" value="BOOK" class="btn">

      </form>

   </section>

  

   <section class="footer">

      <div class="box-container">

         <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +123-852-4565</a>
            <a href="#"> <i class="fas fa-envelope"></i> zenho@gmail.com</a>
            <a href="#"> <i class="fas fa-map"></i> Seminyak, Bali</a>
         </div>

         <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-arrow-right"></i> home</a>
            <a href="#about"> <i class="fas fa-arrow-right"></i> about</a>
            <a href="#room"> <i class="fas fa-arrow-right"></i> rooms</a>
            <a href="#gallery"> <i class="fas fa-arrow-right"></i> gallery</a>
            <a href="#review"> <i class="fas fa-arrow-right"></i> review</a>
            <a href=""> <i class="fas fa-arrow-right"></i> reservation</a>
         </div>

         

      </div>

      <div class="share">
         <a href="#" class="fab fa-facebook-f"></a>
         <a href="#" class="fab fa-instagram"></a>
         <a href="#" class="fab fa-twitter"></a>
         <a href="#" class="fab fa-whatsapp"></a>
      </div>

      <div class="credit">Created By <span>ZenHo</span></div>

   </section>

   















   <script>
    $("#submit-booking").click(function(e) {
        e.preventDefault();
        var orang = $("#orang").val();
        var ruang = $("#ruang").val();
        var kasur = $("#kasur").val();
        var kamar = $("#kamarDropdown").val();
        var lama = $("#lama").val();
        var tgl = $("#tgl").val();
        var tglCheckout = new Date(tgl);
        tglCheckout.setDate(tglCheckout.getDate() + parseInt(lama)); // Pastikan 'lama' diubah menjadi integer

        var tahun = tglCheckout.getFullYear();
        var bulan = (tglCheckout.getMonth() + 1).toString().padStart(2,
            '0'); // Tambah 1 karena indeks bulan dimulai dari 0, pad dengan '0' jika perlu
        var tanggal = tglCheckout.getDate().toString().padStart(2, '0');

        var tanggalFormat = tahun + '-' + bulan + '-' + tanggal;

        console.log(tanggalFormat);
        console.log(kasur);
        console.log(kamar);
        console.log(lama);
        console.log(ruang)
        console.log(orang)
        console.log(tgl);
      //   console.log(id);
      $.ajax({
    type: "POST",
    url: "./reserfasi/input_reservasi.php",
    data: {
                orang: orang,
                ruang: ruang,
                kasur: kasur,
                kamar: kamar,
                lama: lama,
                tgl: tgl,
                tanggalFormat: tanggalFormat
            },
    success: function(response) {
        console.log(response);
        alert("Reservasion successful!");
    },
    error: function(jqXHR, textStatus, errorThrown) {
         // console.log(response)
        alert("AJAX request error");
        console.error("AJAX Error: " + errorThrown);
    },
   });


    });
    </script>

   <script>
    // Mengambil elemen dropdown NIS
    var kasur = document.getElementById('kasur');

    // Mengambil elemen dropdown Guru
    var kamarDropdown = document.getElementById('kamarDropdown');

    // Menambahkan event listener untuk perubahan pada dropdown NIS
    kasur.addEventListener('change', function() {
        var selectedNIS = this.value;

        // Hapus semua opsi di dropdown Guru
        kamarDropdown.innerHTML = ''; // Lebih efisien untuk menghapus semua opsi

        // Tambahkan opsi default "Pilih Kamar" yang tidak dapat dipilih
        var defaultOption = document.createElement('option');
        defaultOption.selected = 'Pilih Kamar';
        defaultOption.text = 'Pilih Kamar';
        defaultOption.value = '';
        defaultOption.disabled = true; // Tambahkan atribut disabled
        kamarDropdown.add(defaultOption);

        // Mengambil data guru yang sesuai dari database berdasarkan NIS yang dipilih
        <?php
          $data = "var guruData = [";
          $query = "SELECT DISTINCT bed.id_bed, kamar.roomID, kamar.nomor_kamar
          FROM kamar
          INNER JOIN bed ON bed.id_bed = kamar.id_bed
          LEFT JOIN reserfasi ON kamar.roomID = reserfasi.roomID
          LEFT JOIN transaksi ON transaksi.id_rs = reserfasi.id_rs
          LEFT JOIN checkout ON checkout.id_transaksi = transaksi.id_transaksi
          LEFT JOIN history ON checkout.id_check = history.id_check
          WHERE checkout.id_transaksi IS NULL OR history.id_his IS NOT NULL 
;";
          $result = mysqli_query($koneksi, $query);
          $first = true;
          $jenisSelec = "";
          if (!empty($_GET['id_1'])) {
              $jenisSelec = $_GET['id_1'];
          }
          while ($row = mysqli_fetch_assoc($result)) {
              if (!$first) {
                  $data .= ",";
              }
              $data .= "{ id_bed: '" . $row['id_bed'] . "', roomID: '" . $row['roomID'] . "', nomor_kamar: '" . $row['nomor_kamar'] . "', selected:'" . $jenisSelec . "' }";
              $first = false;
          }
          $data .= "];";
          echo $data;
          ?>

        // Menambahkan opsi guru ke dropdown berdasarkan NIS yang dipilih
        guruData.forEach(function(data) {
            if (data.id_bed === selectedNIS) {
                var guruOption = document.createElement('option');
                guruOption.text = data.nomor_kamar;
                guruOption.value = data.roomID;
                kamarDropdown.add(guruOption);
                console.log(guruOption);
            }
        });

    });
    </script>
   <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

   <script src="script.js"></script>

   </body>
</html>

