<?php
session_start();
if (isset($_SESSION['email'])) {
    header("location: ../admin/login.php");
    exit;
}

// Sertakan file koneksi dan file lain yang diperlukan
include('../koneksi.php');

// Inisialisasi variabel
$username = "";
$email = "";
$password = "";
$id_T = 1; // Tetapkan id_T ke 1

$errors = array();

// Jika tombol register ditekan
if (isset($_POST['register'])) {
    // Ambil nilai dari formulir
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);

    // Validasi formulir
    if (empty($username)) {
        array_push($errors, "Username diperlukan");
    }
    if (empty($email)) {
        array_push($errors, "Email diperlukan");
    }
    if (strlen($password) < 8) {
        array_push($errors, "Password harus terdiri dari minimal 8 karakter");
    }

    // Jika tidak ada kesalahan, simpan data pengguna ke database
    if (count($errors) == 0) {
        // Enkripsi password sebelum menyimpannya ke database
        $password_hashed = password_hash($password, PASSWORD_DEFAULT);

        // Query untuk menyimpan data pengguna ke database
        $query = "INSERT INTO userr (username, email, password, id_T) 
                  VALUES('$username', '$email', '$password_hashed', '$id_T')";
        mysqli_query($koneksi, $query);

        // Redirect ke halaman login
        header('location: ../admin/zenlogin.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../css/regis.css">
    <link rel="stylesheet" href="../admin/zenlogin.css">
</head>

<body>
    <div class="container">
        <h1>Register</h1>

        <form method="post" action="../admin/zenregis.php">
            <div class="mb-10">
                <label>Username:</label>
                <input type="text" name="username" value="<?php echo $username; ?>">
                <?php if (!empty($errors) && in_array("Username diperlukan", $errors)) : ?>
                <p style="color: red;">Username diperlukan</p>
                <?php endif; ?>
            </div>
            <div class="mb-10">
                <label>Email:</label>
                <input type="email" name="email" value="<?php echo $email; ?>">
                <?php if (!empty($errors) && in_array("Email diperlukan", $errors)) : ?>
                <p style="color: red;">Email diperlukan</p>
                <?php endif; ?>
            </div>
            <div class="mb-10">
                <label>Password:</label>
                <input type="password" name="password">
                <?php if (!empty($errors) && in_array("Password harus terdiri dari minimal 8 karakter", $errors)) : ?>
                <p style="color: red;">Password harus terdiri dari minimal 8 karakter</p>
                <?php endif; ?>
            </div>
            <button type="submit" name="register">Register</button>
            <a href="./admin/zenlogin.php">Already have an account</a>?
        </form>
    </div>
</body>

</html>