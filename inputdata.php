<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="gaya.css">
</head>
<body>
<form action="" method="post" >
	<center>
	<table >
	

<tr>
	<td>Nomor mesin kendaraan</td>
	<td><input type="text" name="a" id="a"></td>
</tr>
<tr>
	<td>Nomor rangka kendaraan</td>
	<td><input type="text" name="b" id="b"></td>
	</tr>
	<tr>
	<td>Jenis kendaraan</td>
	<td><select name="c" id="c">
		<option>Sepeda motor</option>
		<option>Mobil</option>
		<option>Mobil</option>
		<option>Bus</option>
		<option>Truk</option>
	</select></td>
	</tr>
	<tr>
	<td>Nama kendaraan </td>
	<td><input type="text" name="d" id="d"></td>
	</tr>
	<tr>
	<td>Tanggal buat</td>
	<td><input type="date" name="e" id="e"></td>
	</tr><tr>
	<td>Nomor BPKB</td>
	<td><input type="text" name="g" id="g"></td>
	</tr>
	<tr>
	<td>Nomor STNK</td><td><input type="text" name="h" id="h"></td></tr>
	<tr>
	<td>Status STNK</td>
	<td><select name="i" id="i">
		<option>Pajak masih aktif</option>
		<option>Pajak sudah mati </option>
	</select></td>
	</tr>	
<tr>
<td>Catatan kondisi</td>
<td>
<textarea id="f" name="f"></textarea></td>
</tr>
<tr> 
<td></td>

	<td>
<button type="submit" name="kirim">Kirim</button>
</td>
</tr>
</table>
</center>
</body>
<footer >
 <p style="text-align: center; color: yellow;"> &copy;Eri Yulian Hidayat 2021</p>
</footer>
</html>
<?php 
if (isset($_POST['kirim'])) {

	$nomer_mesin=htmlspecialchars($_POST['a']);
	$nomer_rangka=htmlspecialchars($_POST['b']);
	$jenis_kendaraan=htmlspecialchars($_POST['c']);
	$nama_kendaraan=htmlspecialchars($_POST['d']);
	$tanggal=htmlspecialchars($_POST['e']);
	$nomer_BPKB=htmlspecialchars($_POST['g']);
	$nomer_STNK=htmlspecialchars($_POST['h']);
	$status_STNK=htmlspecialchars($_POST['i']);
	$Catatan=htmlspecialchars($_POST['f']);
	
	$koneksi= new mysqli("localhost", "root", "", "kendaraan");
	$sql="INSERT INTO `kendaraan` VALUES ('', '".$nomer_mesin."', '".$nomer_rangka."', '".$jenis_kendaraan."', '".$nama_kendaraan."', '".$tanggal."', '".$nomer_BPKB."', '".$nomer_STNK."', '".$status_STNK."', '".$Catatan."');";
	$q=$koneksi->query($sql);
if ($q) {
	echo "<script> alert(' data BERHASIL tambahkan');</script>";
}

else{
	echo "<script> alert(' data GAGAL tambahkan');</script>";
}

}



 ?>

