<!DOCTYPE html>
<html>
<head>
    <title>Login | Pendataan Warga</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            outline: 0;
            font-family: "Times New Roman", Times, serif;
        }
        body {
            height: 100vh;
            background-image: url("../img/bg.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .container{
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            padding: 20px 25px;
            width: 300px;

            background-color: rgba(0,0,0,.7);
            box-shadow: 0 0 10px rgba(255,255,255,.3);
        }
        .container h2{
            text-align: center;
            color: #ffac42;
            margin-bottom: 30px;
            text-transform: uppercase;
            border-bottom: 4px solid #2979ff;
        }

        .container label{
            text-align: left;
            color: #90caf9;
        }
        .container form input{
            width: calc(100% - 20px);
            padding: 8px 10px;
            margin-bottom: 15px;
            border: none;
            background-color: transparent;
            border-bottom: 2px solid #2979ff;
            color: #fff;
            font-size: 20px;
        }
        .container form button{
            width: 100%;
            padding: 5px 0;
            border: none;
            background-color:#2979ff;
            font-size: 18px;
            color: #fafafa;
            cursor: pointer;
        }    
        h1 {
            font-size: 60px;
            text-align: center;
            color: #ffac42;
            text-shadow: 2px 2px 6px #FF0000;  
        }
        .pesan {
            color: orange;
            font-size: 60px;
        }
    </style>
</head>
<body>
    <br>
    <h1 style="color: black;">Pendataan Warga Tanah Putih</h1>
    <br>
    <?php 
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo "<p class='pesan' style='text-align: center;'>Login gagal! Username dan Password salah!</p>";
            } else if($_GET['pesan'] == "logout"){
                echo "<p class='pesan' style='text-align: center;'>Anda telah berhasil logout</p>";
            } else if($_GET['pesan'] == "belum_login"){
                echo "<p class='pesan' style='text-align: center;'>Anda harus login untuk mengakses halaman admin</p>";
            }
        }
    ?>
    <div class="container">
        <h2>L O G I N</h2>
        <form action="login_exe.php" method="post">
            <label for="Username">Username:</label><br>
            <input type="text" id="Username" name="Username" placeholder="Username"><br>
            <label for="Password">Password:</label><br>
            <input type="password" id="Password" name="Password" placeholder="Password"><br><br>
            <button>Log in</button>
        </form>
    </div>
</body>
</html>
