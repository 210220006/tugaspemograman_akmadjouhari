<! DOCTYPE html>
<html>
<html>
<title>Indehoy</title>
</head>
<?php
//koneksi database
include "koneksi.php";
if(!empty($_POST['save'])){
	$nama_katagori= $_POST['nama_katagori'];
$a=mysqli_query($koneksi,"insert into kategori values('','$nama_katagori')");
if ($a){
header("location:tampilan_kategori.php");
}else{
	echo mysqli_error();
}
}

?>
<body>
<h2>Indehoy<h/2>
<br/>
<a href="tampilan_kategori.php">KEMBALI<a/>
<br/>
<br/>
<h3>TAMBAH DATA KATEGORI</h3>
<form method="POST">
	<table>
	<tr>
	<td>Nama Kategori</td>
	<td><input type="text" Name="nama_katagori"></td>
	</tr>
	<tr>
	<td></td>
	<td><input type="submit" name="save"><td>
	</tr>
	</table>
	</form>
	</body>
	</html>