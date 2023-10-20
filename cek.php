<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];
    $username = "Hidayat";
    $password = "si";
    if ($input_username === $username && $input_password === $password) {
        $_SESSION['username'] = $input_username;
        header("location: profil.php");
    } else {
        echo "Login gagal. Coba lagi.";
    }
}
?>