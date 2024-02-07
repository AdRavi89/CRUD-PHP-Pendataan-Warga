<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data | Pendataan Warga</title>
    <style>
        body {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        .content {
            width: 320px;
            padding: 0px;
            margin: 0;
            width: 100%;
            background-color: #fff;
        }

        .column {
            float: left;
            width: 50%;

        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
            }
        }

        .footer {
            background-color: #fff;
            text-align: center;
            padding: 10px;
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

        div.gallery {
            border: 1px solid #ccc;
        }

        div.gallery:hover {
            border: 1px solid #777;
        }

        div.gallery img {
            width: 100%;
            height: auto;
        }

        div.desc {
            padding: 15px;
            text-align: center;
            background-color: #173A5F;
            color: #fff;
        }

        * {
            box-sizing: border-box;
        }

        .responsive {
            padding: 0 6px;
            float: left;
            width: 24.99999%;
        }

        @media only screen and (max-width: 700px) {
            .responsive {
                width: 49.99999%;
                margin: 6px 0;
            }
        }

        @media only screen and (max-width: 500px) {
            .responsive {
                width: 100%;
            }
        }

        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }

    </style>
</head>
<body>
    <ul>
        <li style="float:left"><a class="active" href="../home.html">Aplikasi Pendataan Warga Tanah Putih</a></li>
        <li><a href="../admin/logout.php" input type="submit" name="tombol" value="Logout">Logout</a></li>
        <li><a href="../about.html">Tentang Kami</a></li>
        <li><a href="../contact.html">Hubungi Kami</a></li>        
        <!-- <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Menu</a>
            <div class="dropdown-content">
                <a href="laptop.html">Tambah Data</a>
                <a href="tv.html">Edit Data</a>
                <a href="tablet.html">Hapus Data</a>
                <a href="smartphone.html">Cetak Data</a>
            </div>
        </li> -->
        <li><a href="../home.html">Home</a></li>
    </ul>
<?php
ob_start();
//menghubungkan koneksi database
include "koneksi.php";
//nama2 variabel tombol sumbit post
$tombol=$_POST['tombol'];

//menjalankan sumbit tombol tambah 
if($tombol=="Tambah"){
  ?>
    <!-- <p class="input-file-wrapper">
    <label for="upload">8. Upload Your Photo &ensp;&ensp;&ensp;&ensp;:</label>
    <input type="file" name="" id="upload">
    </p> -->
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    .container {
      max-width: 500px;
      margin: 0 auto;
      padding: 10px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    }

    h2 {
      text-align: center;
      color: #173A5F;
    }

    form {
      margin-top: 10px;
    }

    label {
      display: block;
      margin-bottom: 15px;
      font-weight: bold;
      color: #173A5F;
    }

    input[type="text"],
    input[type="number"],
    textarea,
    select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    input[type="radio"],
    input[type="checkbox"] {
      margin-right: 5px;
    }

    input[type="submit"] {
      background-color: #173A5F;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #0D263D;
    }
    input[type="text" name="tmp_lhr"],
    input[type="date" name="tgl_lhr"] {
      width: 25%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 2px;
      width: 200px;
      display: inline-block;
    }
  </style>
</head>

<body>
  <div class="container">
    <h2>Form Pendataan Warga Tanah Putih</h2>
    <form method="POST" action="eksekusi.php">
      <label for="no_kk">1. No. Kartu Keluarga:</label>
      <input type="number" name="no_kk" id="no_kk" required style="background-color: #f2f2f2;" /><hr>

      <label for="no_ktp">2. No. KTP:</label>
      <input type="number" name="no_ktp" id="no_ktp" required style="background-color: #f2f2f2;" /><hr>

      <label for="nama">3. Nama:</label>
      <input type="text" name="nama" id="nama" required style="background-color: #f2f2f2;" /><hr>

      <label>4. Tempat, Tanggal Lahir:</label>
      <input type="text" placeholder="Tempat Lahir" name="tmp_lhr" id="tmp_lhr" required style="background-color: #f2f2f2;" colspan="3" width: 200px; display: inline-block;"/><hr>
      <input class="date" type="date" name="tgl_lhr" id="tgl_lhr" required style="background-color: #f2f2f2;" width: 150px; display: inline-block;" /><hr>

      <label>5. Jenis Kelamin:</label>
      <input type="radio" name="jenis_kelamin" value="Laki-laki" required style="margin-right: 15px;" /><span style="color: #173A5F;">Laki-laki</span>
      <input type="radio" name="jenis_kelamin" value="Perempuan" required style="margin-right: 15px;" /><span style="color: #173A5F;">Perempuan</span><hr>

      <label for="status_perkawinan">6. Status Perkawinan:</label>
      <select name="status_perkawinan" id="status_perkawinan" required style="background-color: #f2f2f2;">
        <option value="">-- Pilih Status --</option>
        <option value="Menikah">Menikah</option>
        <option value="Belum Menikah">Belum Menikah</option>
        <option value="cerai">Cerai</option>
      </select><hr>

      <label for="alamat">7. Alamat:</label>
      <textarea name="alamat" id="alamat" required style="background-color: #f2f2f2;"></textarea><hr>
      <input type="submit" name="tombol" value="Simpan" style="background-color: #173A5F;">

    </form>
  </div>
</body>
</html>

<?php
}
//menjalankan sumbit tombol edit
elseif($tombol=="Edit") 
{
    //variabel id_warga dari file tampil.php
    $id_warga=$_POST['id_warga'];

    //mencari data yang akan di edit
    $data = mysqli_query($koneksi,"SELECT * from tbl_warga where id_warga='$id_warga'");
    $d = mysqli_fetch_array($data)
?>
    <h2>Form Edit - Pendataan Warga</h2>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    .container {
      max-width: 500px;
      margin: 0 auto;
      padding: 10px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    }

    h2 {
      text-align: center;
      color: #173A5F;
    }

    form {
      margin-top: 10px;
    }

    label {
      display: block;
      margin-bottom: 15px;
      font-weight: bold;
      color: #173A5F;
    }

    input[type="text"],
    input[type="number"],
    textarea,
    select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    input[type="radio"],
    input[type="checkbox"] {
      margin-right: 5px;
    }

    input[type="submit"] {
      background-color: #173A5F;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #0D263D;
    }
    input[type="text" name="tmp_lhr"],
    input[type="date" name="tgl_lhr"] {
      width: 25%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 2px;
    }
  </style>
</head>

<body>
  <div class="container">
    <h2>Form Pendataan Warga Tanah Putih</h2>
    <form method="POST" action="eksekusi.php">
    <input type="hidden" name="id_warga" value="<?php echo"$id_warga";?>">
    <form method="POST" action="eksekusi.php">
      <label for="no_kk">1. No. Kartu Keluarga:</label>
      <input type="number" name="no_kk" id="no_kk" required style="background-color: #f2f2f2;" required value="<?php echo"$d[no_kk]";?>"/>

      <label for="no_ktp">2. No. KTP:</label>
      <input type="number" name="no_ktp" id="no_ktp" required style="background-color: #f2f2f2;" required value="<?php echo"$d[no_ktp]";?>"/>

      <label for="nama">3. Nama:</label>
      <input type="text" name="nama" id="nama" required style="background-color: #f2f2f2;" required value="<?php echo"$d[nama]";?>"/><br/>

      <label>4. Tempat, Tanggal Lahir:</label>
      <input type="text" name="tmp_lhr" id="tmp_lhr" required style="background-color: #f2f2f2;" required value="<?php echo"$d[tmp_lhr]";?>" colspan="3" />
      <input type="date" name="tgl_lhr" id="tgl_lhr" required style="background-color: #f2f2f2;" required value="<?php echo"$d[tgl_lhr]";?>"/><br/>

<label>5. Jenis Kelamin:</label>
<input type="radio" name="jenis_kelamin" value="Laki-laki" <?php if($d['jenis_kelamin'] == "Laki-laki") echo "checked"; ?> required style="margin-right: 15px;" /><span style="color: #173A5F;">Laki-laki</span>
<input type="radio" name="jenis_kelamin" value="Perempuan" <?php if($d['jenis_kelamin'] == "Perempuan") echo "checked"; ?> required style="margin-right: 15px;" /><span style="color: #173A5F;">Perempuan</span>


<label for="status_perkawinan">6. Status Perkawinan:</label>
<select name="status_perkawinan" id="status_perkawinan" required style="background-color: #f2f2f2;">
    <option value="">-- Pilih Status --</option>
    <option value="Menikah" <?php if($d['status_perkawinan'] == "Menikah") echo "selected"; ?>>Menikah</option>
    <option value="Belum Menikah" <?php if($d['status_perkawinan'] == "Belum Menikah") echo "selected"; ?>>Belum Menikah</option>
    <option value="cerai" <?php if($d['status_perkawinan'] == "cerai") echo "selected"; ?>>Cerai</option>
</select>

      <label for="alamat">7. Alamat:</label>
      <input type="text" name="alamat" id="alamat" required style="background-color: #f2f2f2;" required value="<?php echo"$d[alamat]";?>"><br />
      <br>
      <input type="submit" name="tombol" value="Update" style="background-color: #173A5F;">

    </form>
  </div>
</body>
</html>
    
    <?php
    }

    //menjalankan sumbit tombol simpan data (beda dari modul)
    elseif($tombol=="Simpan")
    {
        mysqli_query($koneksi,"INSERT INTO tbl_warga (no_kk, no_ktp, nama, tmp_lhr, tgl_lhr, jenis_kelamin, status_perkawinan, alamat) 
        values ('$_POST[no_kk]','$_POST[no_ktp]','$_POST[nama]','$_POST[tmp_lhr]','$_POST[tgl_lhr]','$_POST[jenis_kelamin]','$_POST[status_perkawinan]','$_POST[alamat]')");
        echo"<h2>Data berhasil disimpan</h2>";
        echo "<meta http-equiv='refresh' content='1;url=tampil.cetak.php'>";
        // header('Refresh: 1;url=tampil.cetak.php');
        exit;
    }


    //menjalankan sumbit tombol update data
    elseif($tombol=="Update")
    {
        mysqli_query($koneksi,"UPDATE tbl_warga set 
        no_kk='$_POST[no_kk]',no_ktp='$_POST[no_ktp]',nama='$_POST[nama]',tmp_lhr='$_POST[tmp_lhr]', tgl_lhr='$_POST[tgl_lhr]',jenis_kelamin='$_POST[jenis_kelamin]',status_perkawinan='$_POST[status_perkawinan]',alamat='$_POST[alamat]' 
        where id_warga='$_POST[id_warga]'");
        echo"<h2>Data berhasil diupdate</h2>";
        echo "<meta http-equiv='refresh' content='1;url=tampil.edit.php'>";
        // header('Refresh: 1;url=tampil.edit.php');    
        exit;
    }
    //menjalankan sumbit tombol hapus data 
    elseif($tombol=="Hapus")
    {
        mysqli_query($koneksi,"DELETE from tbl_warga 
        where id_warga='$_POST[id_warga]'");
        echo"<h2>Data berhasil dihapus</h2>";
        echo "<meta http-equiv='refresh' content='1;url=tampil.hapus.php'>";
        // header('Refresh: 1;url=tampil.hapus.php');
        exit;
    }
    
    // Menjalankan submit tombol Cetak
    elseif($tombol=="Cetak") 
    {
        // Mendapatkan data yang telah dipilih dari database
        $id_warga=$_POST['id_warga'];
        $data = mysqli_query($koneksi,"SELECT * from tbl_warga where id_warga='$id_warga'");
        $d = mysqli_fetch_array($data);

        // Mengirim data ke halaman "Cetak.php" menggunakan metode GET
        $params = "?no_kk=" . urlencode($d['no_kk']) . "&no_ktp=" . urlencode($d['no_ktp']) . "&nama=" . urlencode($d['nama']) .  "&tmp_lhr=" . urlencode($d['tmp_lhr']) .  "&tgl_lhr=" . urlencode($d['tgl_lhr']) . "&jenis_kelamin=" . urlencode($d['jenis_kelamin']) . "&status_perkawinan=" . urlencode($d['status_perkawinan']) . "&alamat=" . urlencode($d['alamat']);
        $cetak_url = "cetak.php" . $params;
        echo "<meta http-equiv='refresh' content='1;url=$cetak_url'>";
        // header("Location: $cetak_url");
        exit;

        //window.print() //cara print melalui window
    }

    // Menjalankan submit tombol Cetak
    // elseif($tombol=="Cari") 
    // {
    //     // Mendapatkan data yang telah dipilih dari database
    //     $id_warga=$_POST['id_warga'];
    //     $data = mysqli_query($koneksi,"SELECT * from tbl_warga where id_warga='$id_warga'");
    //     $d = mysqli_fetch_array($data);

    //     // Mengirim data ke halaman "Cetak.php" menggunakan metode GET
    //     $params = "?no_kk=" . urlencode($d['no_kk']) . "&no_ktp=" . urlencode($d['no_ktp']) . "&nama=" . urlencode($d['nama']) .  "&tmp_lhr=" . urlencode($d['tmp_lhr']) .  "&tgl_lhr=" . urlencode($d['tgl_lhr']) . "&jenis_kelamin=" . urlencode($d['jenis_kelamin']) . "&status_perkawinan=" . urlencode($d['status_perkawinan']) . "&alamat=" . urlencode($d['alamat']);
    //     $cetak_url = "Cetak.php" . $params;
    //     header("Location: $cetak_url");
    //     exit;
    // }
    ?>