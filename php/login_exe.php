<?php
session_start();
include "koneksi.php";

$Username = $_POST['Username'];
$Password = md5($_POST['Password']);

$cek = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE Username='$Username' AND Password='$Password' AND Aktif='Enable'");

if(mysqli_num_rows($cek) > 0) {
    $_SESSION['Username'] = $Username;
    $_SESSION['status'] = "login";
    header("location: ../admin/index.php");
} else {
    header("location: login.php?pesan=gagal");
}
?>
