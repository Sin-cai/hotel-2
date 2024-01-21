<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../customer.php");
    exit;
} else if ($_SESSION['id_T'] == 1) {
    header('location: ../customer.php');
} else if ($_SESSION['id_T'] == 2) {
    header('location: ../admin/zenadmin.php');
}
?>