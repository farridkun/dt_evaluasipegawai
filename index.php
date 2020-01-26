<?php
// Create database connection using config file
include_once("config.php");
//tabel
$result = mysqli_query($mysqli, "SELECT * FROM data_training ORDER BY no ASC");
?>
<html>

<head>
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
</head>

<body class="p-3 mb-2 bg-primary text-white">
	<div class="container-fluid">
	<h1> <center>Data Training</center> </h1>
	<table align="center" class="table table-striped table-dark">
		<tr align='center'>
			<th>NO</th>
			<th>NAMA PEGAWAI</th>
			<th>MASA KERJA</th>
			<th>USIA</th>
			<th>PENDIDIKAN</th>
			<th>KINERJA</th>
			<th>KEPUTUSAN</th>
		</tr>
		<?php
		while ($dt = mysqli_fetch_array($result)) {
			echo "<tr align='center'>";
			echo "<td>" . $dt['no'] . "</td>";
			echo "<td>" . $dt['nama_pegawai'] . "</td>";
			echo "<td align='center'>" . $dt['masa_kerja'] . "</td>";
			echo "<td align='center'>" . $dt['usia'] . "</td>";
			echo "<td align='center'>" . $dt['pendidikan'] . "</td>";
			echo "<td align='center'>" . $dt['kinerja'] . "</td>";
			echo "<td align='center'>" . $dt['hasil_evaluasi'] . "</td>";
		}
		?>
	</table>
	<h1> <center>Parameter</center> </h1>
	<table align="center" class="table table-striped table-dark">
		<tr align='center'>
			<th>MASA KERJA</th>
			<th>USIA</th>
			<th>PENDIDIKAN</th>
			<th>KINERJA</th>
		</tr>
		<tr align='center'>
			<td> 0-10</td>
			<td>25-35</td>
			<td>SMA</td>
			<td>BURUK</td>
		</tr>
		<tr align='center'>
			<td> 10–20</td>
			<td>36-45</td>
			<td>SARJANA</td>
			<td>BIASA</td>
		</tr>
		<tr align='center'>
			<td> 20–30</td>
			<td>46-55</td>
			<td>MAGISTER</td>
			<td>BAIK</td>
		</tr>
	</table>
	<br>
	</br>
	<center>
		<button class="btn btn-dark"><a href="proses.php" class="text-white"><b>Proses</b></a></button></center>
	<br>
	</br>
	</div>
</body>

</html>