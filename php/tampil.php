<h2>Data Warga</h2>
<!-- form untuk membahkan data dengan tujuan file eksekusi.php -->
<form method="POST" action="eksekusi.php">
Tambah data : <input type="submit" name="tombol" value="Tambah">

<!-- SEARCH -->
<form action="tampil.php" method="get" >
	<label>Cari :</label>
  <input class="form-control" type="text" placeholder="cari disini .." name="cari">
	<input class="form-control" type="submit" name="ss" value="Cari"> <br>
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
        &ensp;<input type="submit" name="tombol" value="Edit"> |  
        <input type="submit" name="tombol" value="Hapus"> | 
        <input type="submit" name="tombol" value="Cetak">
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