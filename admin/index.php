<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi login | Pendataan Warga</title>
    <style>
        body {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 320px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
        }

        h2 {
            color: #2979ff;
            margin-bottom: 20px;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: right;
        }

        .active {
            background-color: #173A5F;
        }

        li a,
        .dropbtn {
            display: inline-block;
            color: #ff1f57;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover,
        .dropdown:hover .dropbtn {
            background-color: #ffac42;
        }

        li.dropdown {
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #173A5F;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: #fff;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: gray;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>
<body>
    <ul>
        <li style="float:left"><a class="active" href="../home.html">Aplikasi Pendataan Warga Tanah Putih</a></li>
        <li><a href="../admin/logout.php">Logout</a></li>
        <li><a href="../about.html">Tentang Kami</a></li>
        <li><a href="../contact.html">Hubungi Kami</a></li>
        <li><a href="../home.html">Home</a></li>
    </ul>


    <?php 
    session_start();
    if($_SESSION['status'] != "login"){
        header("location:../login.php?pesan=belum_login");
    }
    header("Refresh: 3; URL=../home.html");
    ?>
    <div class="container">
        <h2 >Halaman Olah Data <?php echo $_SESSION['Username']; ?></h2>
    </div>
</body>
</html>
