<?php
include '../config.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Penjualan</title>
</head>
<body>
	<h2><a href = '../menu.php'>Kembali Ke Menu</a></h2>
	<h1>Data Penjualan</h1><br>
	<a href ="add_transaksi.php"><button>Tambah Data</button></a>
	<br>
	<br>
<table border="1">
	<thead>
		<tr>
			<th>Nota</th>
			<th>tanggal</th>
			<th>kode_transaksi</th>
			<th>barang</th>
			<th>satuan</th>
			<th>harga</th>
			<th>juamlah</th>
			<th>aksi</th>
		</tr>
	</thead>

	<tbody>
	<?php
			$sql = "CALL tampil_index()";
			$res = $conn->query($sql);
			if($res->num_rows > 0){
				$i = 0;
				while($dat = $res->fetch_assoc()){
					$i++;
					echo "<tr>
							<td>".$dat["Nota"]."</td>
							<td>".$dat["tgl"]."</td>
							<td>".$dat["Djual"]."</td>
							<td>".$dat["namab"]."</td>
							<td>".$dat["satuan"]."</td>
							<td>".$dat["harga"]."</td>
							<td>".$dat["jml"]."</td>
							<td>edit||hapus</td>
							</tr>";
				}
			}
	 ?>	
	</tbody>
</table>
</body>
</html> 