<?php
session_start();
session_destroy();
header("location: ../admin/zenlogin.php");
exit;
?>