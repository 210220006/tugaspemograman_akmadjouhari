<! DOCTYPE html>
<html>
<html>
<title>Indehoy.com</title>
</head>
<?php
//koneksi database
include "koneksi.php";
if(!empty($_POST['save'])){
	$tgl_transaksi = $_POST['tgl_transaksi'];
$no_transaksi = $_POST['no_transaksi'];
$jenis_transaksi = $_POST['jenis_transaksi'];
$barang_id = $_POST['barang_id'];
$jumlah_transaksi = $_POST['jumlah_transaksi'];
$user_id = $_POST['user_id'];
$member = $_POST['member']
$a=mysqli_query($koneksi,"insert into transaksi values('','$tgl_transaksi','$no_transaksi','$jenis_transaksi','$barang_id','$jumlah_transaksi','$user_id','$member')");
if ($a)
{
header("location:tampilan_transaksi.php");
}
else
{
	echo mysqli_error($koneksi);
	
}
}
$querybarang = "SELECT * FROM barang";
$resultbarang = mysqli_query($koneksi,$querybarang);

$queryuser = "SELECT * FROM user";
$resultuser = mysqli_query($koneksi,$queryuser);

?>
<body>
<h2>Indehoy.com<h/2>
<br/>
<a href="tampilan_member.php">KEMBALI<a/>
<br/>
<br/>
<h3>TAMBAHKAN DATA TRANSAKSI</h3>
<form method="POST">
	<table>
	<tr>
	<td>Tanggal transaksi</td>
	<td><input type="date" Name="tgl_transaksi"></td>
	</tr>
	<tr>
	<td>No transaksi</td>
	<td><input type="text" Name="no_transaksi"></td>
	</tr>
	<tr>
	<td>Jenis Transaksi</td>
	<td><select Name="jenis_transaksi">
		<option value="">---Pilih---</option>
		<option value="Tunai">Tunai</option>
		<option value="Kredit">Kredit</option>
		</select>
		<td>	
	</tr>
	<tr>
	<td>Barang</td>
	<td><select name="barang_id">
	<option value="">---Pilih---</option>
	<?php
	while ($databarang=mysqli_fetch_array($resultbarang))
	{
		echo "<option value=$databarang[id_barang]>$databarang[nama_barang]</option>";
	}
	?>
	</select>
	<td>
	<tr>
	<tr>
	<td>Jumlah Transaksi</td>
	<td><input type="number" name="jumlah_transaksi"></td>
	</tr>
	<tr>
	<td>User</td>
	<td><select name="user_id">
	<option value="">---Pilih---</option>
	<?php
	while ($datauser=mysqli_fetch_array($resultuser))
	{
		echo "<option value=$datauser[id_user]>$datauser[nama]</option>";
	}
	?>
	</select>
	</td>
	</tr>
    <tr>
	<td></td>
	<td><input type="submit" name="save"><td>
	</tr>
    <br>
    <table border="1" width="70%">
    <tr>
                <th style="background-color:dimgray; color:white; width:10px;">tgl_transaksi</th>
                <th style="background-color:dimgray; color:white; width:10px;">no_transaksi</th>
                <th style="background-color:dimgray; color:white; width:10px;">jenis_transaksi</th>
                <th style="background-color:dimgray; color:white; width:10px;">barang_id</th>
                <th style="background-color:dimgray; color:white; width:10px;">jumlah_transaksi</th>
                <th style="background-color:dimgray; color:white; width:10px;">user_id</th>
				<th style="background-color:dimgray; color:white; width:10px;">member</th>
            </tr>
            <tr>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
				<td>-</td>
            </tr>
            <tr>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
				<td>-</td>
            </tr>
	</table>
	</form>
	</body>
	</html>