<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak ID Card | Pendataan Warga</title>
    <style>
        body {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            justify-content: center;
            align-items: center;
            background-color: #f2f2f2;
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

        .tabel {
            text-align: center;
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
 <br>
 <br>
<?php
// Mendapatkan data dari tampil.php menggunakan metode GET (baru dicoba)
// $foto = $_GET['foto'];
$no_kk = $_GET['no_kk'];
$no_ktp = $_GET['no_ktp'];
$nama = $_GET['nama'];
$tmp_lhr = $_GET['tmp_lhr'];
$tgl_lhr = $_GET['tgl_lhr'];
$jenis_kelamin = $_GET['jenis_kelamin'];
$status_perkawinan = $_GET['status_perkawinan'];
$alamat = $_GET['alamat'];
?>
<?php
echo '<table border="1">';
echo '<tr>';
echo '<td colspan="3" align="center"><b>Tanda Pengenal</b></td>';
echo '</tr>';
// echo '<tr>';
// echo '<td td rowspan="8">&ensp;' . $foto . '&ensp;</td>';
// echo '</tr>';
echo '<tr>';
echo '<td>1. No. Kartu Keluarga&ensp;</td>';
echo '<td>&ensp;' . $no_kk . '&ensp;</td>';
echo '</tr>';
echo '<tr>';
echo '<td>2. No. KTP&ensp;</td>';
echo '<td>&ensp;' . $no_ktp . '&ensp;</td>';
echo '</tr>';
echo '<tr>';
echo '<td>3. Nama&ensp;</td>';
echo '<td>&ensp;' . $nama . '&ensp;</td>';
echo '</tr>';
echo '<tr>';
echo '<td>4. Tempat, Tgl. Lahir&ensp;</td>';
echo '<td>&ensp;' . $tmp_lhr . ', ' . $tgl_lhr . ' &ensp;</td>';
echo '</tr>';
echo '<tr>';
echo '<td>5. Jenis Kelamin&ensp;</td>';
echo '<td>&ensp;' . $jenis_kelamin . '&ensp;</td>';
echo '</tr>';
echo '<tr>';
echo '<td>6. Status Perkawinan&ensp;</td>';
echo '<td>&ensp;' . $status_perkawinan . '&ensp;</td>';
echo '</tr>';
echo '<tr>';
echo '<td>7. Alamat&ensp;</td>';
echo '<td><text area>&ensp;' . $alamat . '&ensp;</textarea></td>';
echo '</tr>';
echo '</table>';
?>
<br>
<br>
<a href="pdf.php?no_kk=<?php echo $no_kk; ?>&no_ktp=<?php echo $no_ktp; ?>&nama=<?php echo $nama; ?>&tmp_lhr=<?php echo $tmp_lhr; ?>&tgl_lhr=<?php echo $tgl_lhr; ?>&jenis_kelamin=<?php echo $jenis_kelamin; ?>&status_perkawinan=<?php echo $status_perkawinan; ?>&alamat=<?php echo $alamat; ?>">....Download PDF....</a>
<br>
<br>
      </body>
<!-- <table border="1">
    <tr>
      <td colspan="3" align="center"><b>Tanda Pengenal Warga Tanah Putih</b></td>
    </tr>
    <tr>
      <td rowspan="7">$foto</td>
      <td>No. Kartu Keluarga &ensp;</td>
      <td>&ensp;' . $no_kk . '&ensp;</td>
    </tr>
    <tr>
      <td>No. KTP &ensp;</td>
      <td>&ensp;'. $no_ktp .'&ensp;</td>
    </tr>
    <tr>
      <td>Nama &ensp;</td>
      <td>&ensp;'. $nama .'&ensp;</td>
    </tr>
    <tr>
      <td>Tempat, Tgl. Lahir &ensp;</td>
      <td>&ensp;'. $tmp_lhr . '&ensp; , '. $tgl_lhr .'</td>
    </tr>
    <tr>
      <td>Jenis Kelamin &ensp;</td>
      <td>&ensp;'. $jenis_kelamin .'&ensp;</td>
    </tr>
    <tr>
      <td>Status Perkawinan &ensp;</td>
      <td>&ensp;' . $status_perkawinan .'&ensp;</td>
    </tr>
    <tr>
      <td>Alamat &ensp;</td>
      <td><textarea>&ensp;'. $alamat .'&ensp;</textarea></td>
    </tr>
  </table> -->