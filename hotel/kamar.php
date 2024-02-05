<html>
    <table border="1" cellpading="5">
        TABEL SISWA
        <tr>
            <td>Room ID</td>
            <td>Nomor Kamar</td>
            <td>Tipe Kamar</td>
            <td>id_bed</td>
            

        </tr>
<?php
include "koneksi.php";
$data=mysqli_query($koneksi,"SELECT * FROM kamar");
while($d=mysqli_fetch_array($data)){
?>
<tr>
    <td><?php echo $d['roomID'] ?></td>
    <td><?php echo $d['nomor_kamar'] ?></td>
    <td><?php echo $d['tipe_kamar'] ?></td>
    <td><?php echo $d['id_bed'] ?></td>
    
   

<?php
}
?>

    </table>
    <a href="input-siswa.php">TAMBAHKAN DATA BARU</a>
</html>