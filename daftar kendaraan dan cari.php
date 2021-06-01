<?php  
$koneksi= new mysqli("localhost", "root", "", "kendaraan");

$cek=mysqli_query($koneksi, "SELECT * FROM kendaraan");


?>


<?php 



if (isset($_POST['cari'])) {
	$cari=$_POST['car'];
	$cek= mysqli_query($koneksi,"SELECT * FROM kendaraan WHERE nomer_mesin like '%".$cari."%'

		");


}

else{
	$cek= mysqli_query($koneksi,"SELECT * FROM kendaraan");
}


 ?>




<!DOCTYPE html>
<html>
<head>
	<title>daftar kendaraan</title>
	<link rel="stylesheet" type="text/css" href="gaya.css">
</head>
<body>
	<form action="" method="post">
		<input type="text" name="car" id="car" size="50px" autofocus autocomplete="off" placeholder="ketik nomer_mesin yang ingin dicari">

		<button type="submit"  name="cari"> cari</button>

	</form>
	<br>
<table border="1px" cellpadding="15px" cellspacing="0">
	

<tr>
	<th>Aksi</th>
	<th>Nomer mesin kendaraan</th>
	<th>Nomer rangka kendaraan</th>
	<th>Jenis kendaraan</th>
	<th>Nama kendaraan </th>
	<th>Tanggal buat</th>
	<th>Nomer BPKB</th>
	<th>Nomer STNK</th>
	<th>Status STNK</th>
	<th>Kondisi</th>
</tr>
	<?php  while ($row=mysqli_fetch_assoc($cek) ) :{
		} ?>
<tr>
	<td><a href="hapus.php?id=<?=$row["id"]; ?>" onclick="return confirm('yakin');">hapus</a>
	<a href="ubah.php?id=<?= $row["id"]; ?>"> ubah</a></td>
	<td><?php echo$row["nomer_mesin"]; ?></td>
	<td><?php echo$row["nomer_rangka"]; ?></td>
	<td><?php echo$row["jenis_kendaraan"]; ?></td>
	<td><?php echo$row["nama_kendaraan"]; ?></td>
	<td><?php echo$row["tanggal"]; ?></td>
	<td><?php echo$row["nomer_BPKB"]; ?></td>
	<td><?php echo$row["nomer_STNK"]; ?></td>
	<td><?php echo$row["status_STNK"]; ?></td>
	<td><?php echo$row["kondisi"]; ?></td>
</tr>
<?php  endwhile; ?>
</table>
</body>
<footer >
 <p style="text-align: center; color: yellow;"> &copy;Eri Yulian Hidayat 2021</p>
</footer>
</html>

