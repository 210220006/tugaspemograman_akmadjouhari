</html>
	<head>
	<title>Indehoy</title>
	</head>
	<body>
	<h2>Indehoy</h2>
	<br/>
	<a href="input_kategori.php">+ TAMBAHKAN KATEGORI</a>
	<br/>
	<table border="1">
	<tr>
	<th>No</th>
		<th>Nama Kategori</th>
		<th>OPSI</th>
	</tr>
	<?php
	include 'koneksi.php';
	$no =1;
	$data = mysqli_query($koneksi,"select * from kategori");
	while($d= mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['nama_katagori']; ?></td>
			<td>
				<a href="edit_tampilkategori.php?id=<?php echo $d['id']; ?>">EDIT</a>
				<a href="hapus_tampilkategori.php?id=<?php echo $d['id']; ?>">HAPUS</a>
			<td>
		</tr>
	<?php
	}
	?>
	</table>
	</body>
	</html>