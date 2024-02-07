<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "username", "password", "nama_database");

// Fungsi untuk mengenkripsi password
function encryptPassword($password) {
    return password_hash($password, PASSWORD_DEFAULT);
}

// Fungsi untuk menambahkan pengguna ke tabel
function tambahPengguna($koneksi, $username, $password, $role) {
    $passwordHash = encryptPassword($password);
    $query = "INSERT INTO tabel_pengguna (username, password, role) VALUES ('$username', '$passwordHash', '$role')";
    mysqli_query($koneksi, $query);
}

// Menghandle proses submit form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $role = $_POST["role"];

    // Memastikan username dan password tidak kosong
    if (!empty($username) && !empty($password)) {
        tambahPengguna($koneksi, $username, $password, $role);
        echo "Registrasi berhasil!";
    } else {
        echo "Username dan password harus diisi!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Registrasi</title>
</head>
<body>
    <h2>Form Registrasi</h2>
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>
        <label for="role">Role:</label>
        <select name="role" id="role" required>
            <option value="operator">Operator</option>
            <option value="admin">Admin</option>
        </select><br><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>
