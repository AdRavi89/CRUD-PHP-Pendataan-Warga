<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Data | Pendataan Warga</title>
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
<h2>Hapus Data Warga</h2>
<!-- form untuk membahkan data dengan tujuan file eksekusi.php -->
<form method="POST" action="eksekusi.php">
<!-- SEARCH -->
<form action="tampil.php" method="get" >
	<!-- <label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari"> -->
</form>

<table border='1'>
<tr>
    <th>No.</th>
    <th>No. Kartu Keluarga</th>
    <th>No. KTP</th>
    <th>Nama</th>
    <th>Tempat Lahir</th>
    <th>Tgl. Lahir</th>
    <th>Jenis Kelamin</th>
    <th>Status Perkawinan</th>
    <th>Alamat</th>
    <th>Pilihan</th>
</tr>
<?php 
//memanggil koneksi hosting dan database
include 'koneksi.php';
$no = 1;
//query mysqli untuk menampilkan data
$data = mysqli_query($koneksi,"select * from tbl_warga");
while($d = mysqli_fetch_array($data)){
?>
<tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $d['no_kk']; ?></td>
    <td><?php echo $d['no_ktp']; ?></td>
    <td><?php echo $d['nama']; ?></td>
    <td><?php echo $d['tmp_lhr']; ?></td>
    <td><?php echo $d['tgl_lhr']; ?></td>
    <td><?php echo $d['jenis_kelamin']; ?></td>
    <td><?php echo $d['status_perkawinan']; ?></td>
    <td><?php echo $d['alamat']; ?></td>
    <!-- form untuk mengubah dan menghapus data dengan tujuan file ke eksekusi.php -->
    <td>
        <form method="POST" action="eksekusi.php">
        <input type="hidden" name='id_warga' value="<?php echo $d['id_warga']; ?>"> 
        &ensp;<input type="submit" name="tombol" value="Hapus">
        </form>
    </td>
</tr>
<?php 
}
?> 
</table> 

<style>
   

    h2 {
        font-size: 40px;
        color: #000000;
        text-shadow: 2px 2px 6px #FF0000;
        text-align: center;
    
    }

    /* Tabel */
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      padding: 2px;
      text-align: left;
    }

    th {
      font-weight: bold;
      text-align : center;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    input[type="submit"] {
      padding: 5px 10px;
      background-color: #ff1f57;
      color: white;
      border: none;
      cursor: pointer;

    }
    
    form[action="tampil.php"]{
      text-align: left;
    }
</style>
<br>
<br>
    </div>
    <div class="clearfix"></div>
    <div class="footer">
	        <h6>&copy2023 | Pendataan Warga </h6>
    </div>
