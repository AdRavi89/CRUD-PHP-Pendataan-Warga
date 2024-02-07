<?php
// Data pengguna
$users = array(
    array("level" => "admin", "password" => "admin123", "name" => "Admin"),
    array("level" => "operator", "password" => "operator123", "name" => "Operator"),
    array("level" => "ketua", "password" => "ketua123", "name" => "Ketua")
);

// Fungsi untuk memeriksa kecocokan level akun dan password
function login($level, $password) {
    global $users;
    
    foreach ($users as $user) {
        if ($user["level"] == $level && $user["password"] == $password) {
            return $user["name"];
        }
    }
    
    return false;
}

// Proses login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $level = $_POST["level"];
    $password = $_POST["password"];
    $username = $_POST["username"];

    $name = login($level, $password);
    
    if ($name !== false) {
        echo "<p style='font-size: 50px; color: #1a1a1a; text-align: center;'>Selamat datang, " . $name . " " . $username . "!</p>";
        header('Refresh: 3;url=..\home.html');    
        exit;
    } else {
        echo "<p style='font-size: 20px; color: #ff1f57;'>Login gagal! Silakan cek level akun dan password Anda.</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <!-- CSS -->
    <style>
        body {
            background-image: url("../img/bg.jpg");
            background-color: #333333;
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Do not repeat the image */
            background-size: fixed; /* Resize the background image to cover the entire container */
            text-align: center;
        }
        
        form {
            display: inline-block;
            background-color: #1a1a1a;
            padding: 40px;
            margin-top: 10px;
        }
        
        input[type="text"],
        input[type="password"] {
            width: 200px;
            padding: 5px;
            margin-bottom: 10px;
        }
        
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #ff1f57;
            color: white;
            border: none;
            cursor: pointer;
        }

        h1 {
            font-size: 40px;
            text-align: center;
            color: #ffac42;
        }

        h2 {
            font-size: 40px;
            color: #000000;
            text-shadow: 2px 2px 6px #FF0000;
            
        }

        label {
            color: #ffac42;
        }
    </style>
</head>
<body>
    <h1>L O G I N</h1>
    <h2>Pendataan Warga Tanah Putih</h2>
<!-- Form Loginnya -->
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" placeholder="Username"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" placeholder="Password"><br>
        <label for="level">Level:</label><br>
        <input type="text" id="level" name="level" placeholder="Level"><br><br> 
        <input type="submit" value="Submit">
    </form> 


</body>
</html> 
