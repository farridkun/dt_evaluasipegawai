<html>

<head>
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
</head>

<body class="p-3 mb-2 bg-primary text-white">
	<center>
		<h2> Pengujian</h2>
		<form method="post">
			<table border='1' class='table table-striped table-dark'>
				<tr>
					<td>Nama Pegawai</td>
					<td><input type="text" name="nama_pegawai"></td>
				</tr>
				<tr>
					<td>Masa Kerja</td>
					<td><input type="text" name="masa_kerja"></td>
				</tr>
				<tr>
					<td>Usia</td>
					<td>
						<select name="usia">
							<option value="26-35">25-35</option>
							<option value="36-45">36-45</option>
							<option value="46-55">46-55</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Hipertensi</td>
					<td>
						<select name="pendidikan">
							<option value="SMA">SMA</option>
							<option value="SARJANA">SARJANA</option>
							<option value="MAGISTER">MAGISTER</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>KINERJA</td>
					<td>
						<select name="kinerja">
							<option value="BAIK">BAIK</option>
							<option value="BIASA">BIASA</option>
							<option value="BURUK">BURUK</option>
						</select>
					</td>
				</tr>
			</table>
			<br>
			<center><button type="submit" value="uji" class="btn btn-dark text-white">UJI</button></center>
		</form>
		<br>
		<?php
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$nama_pegawai = $_POST['nama_pegawai'];
			$masa_kerja = $_POST['masa_kerja'];
			$usia = $_POST['usia'];
			$pendidikan = $_POST['pendidikan'];
			$kinerja = $_POST['kinerja'];
			$hasil_evaluasi;

			if ($pendidikan == "SMA" and $kinerja == "BAIK" and $kinerja == "BIASA" and $usia >= 25 and $usia <= 35 and $masa_kerja >= 0 and $masa_kerja <= 10) {
				$hasil_evaluasi = "PROMOSI";
			} else if ($pendidikan == "SMA" and $kinerja == "BAIK" and $kinerja == "BIASA" and $usia >= 25 and $usia <= 35 and $masa_kerja >= 11 and $masa_kerja <= 20) {
				$hasil_evaluasi = "MUTASI";
			} else if ($pendidikan == "SMA" and $kinerja == "BAIK" and $kinerja == "BIASA" and $usia >= 25 and $usia <= 35 and $masa_kerja >= 11 and $masa_kerja <= 20) {
				$hasil_evaluasi = "PHK";
			} else if ($pendidikan == "SMA" and $kinerja == "BAIK" and $kinerja == "BIASA" and $usia >= 25 and $usia <= 35 and $masa_kerja >= 21 and $masa_kerja >= 30) {
				$hasil_evaluasi = "PROMOSI";
			} else if ($pendidikan == "SMA" and $kinerja == "BAIK" and $kinerja == "BIASA" and $usia >= 25 and $usia <= 35 and $masa_kerja >= 21 and $masa_kerja >= 30) {
				$hasil_evaluasi = "MUTASI";
			} else if ($pendidikan == "SMA" and $kinerja == "BAIK" and $kinerja == "BIASA" and $usia >= 25 and $usia <= 35 and $masa_kerja >= 21 and $masa_kerja >= 30) {
				$hasil_evaluasi = "PHK";
			} else if ($pendidikan == "SMA" and $kinerja == "BAIK" and $kinerja == "BIASA" and $usia >= 46 and $usia <= 55 and $masa_kerja >= 0 and $masa_kerja <= 10) {
				$hasil_evaluasi = "PROMOSI";
			} else if ($pendidikan == "SMA" and $kinerja == "BAIK" and $kinerja == "BIASA" and $usia >= 46 and $usia <= 55 and $masa_kerja >= 11 and $masa_kerja <= 20) {
				$hasil_evaluasi = "MUTASI";
			} else if ($pendidikan == "SMA" and $kinerja == "BAIK" and $kinerja == "BIASA" and $usia >= 46 and $usia <= 55 and $masa_kerja >= 11 and $masa_kerja <= 20) {
				$hasil_evaluasi = "PHK";
			} else if ($pendidikan == "SMA" and $kinerja == "BAIK" and $kinerja == "BIASA" and $usia >= 46 and $usia <= 55 and $masa_kerja >= 21 and $masa_kerja >= 30) {
				$hasil_evaluasi = "MUTASI";
			} else if ($pendidikan == "SMA" and $kinerja == "BAIK" and $kinerja == "BIASA" and $usia >= 46 and $usia <= 55 and $masa_kerja >= 21 and $masa_kerja >= 30) {
				$hasil_evaluasi = "PHK";
			} else if ($pendidikan == "SMA" and $kinerja == "BAIK" and $kinerja == "BIASA" and $usia >= 46 and $usia <= 55 and $masa_kerja >= 21 and $masa_kerja >= 30) {
				$hasil_evaluasi = "PROMOSI";
			} else if ($pendidikan == "SMA" and $kinerja == "BIASA" and $kinerja == "BURUK" and $usia >= 46 and $usia <= 55 and $masa_kerja >= 0 and $masa_kerja <= 10) {
				$hasil_evaluasi = "MUTASI";
			} else if ($pendidikan == "SMA" and $kinerja == "BIASA" and $kinerja == "BURUK" and $usia >= 46 and $usia <= 55 and $masa_kerja >= 0 and $masa_kerja <= 10) {
				$hasil_evaluasi = "PHK";
			} else if ($pendidikan == "SMA" and $kinerja == "BIASA" and $kinerja == "BURUK" and $usia >= 46 and $usia <= 55 and $masa_kerja >= 11 and $masa_kerja <= 20) {
				$hasil_evaluasi = "PROMOSI";
			} else if ($pendidikan == "SMA" and $kinerja == "BIASA" and $kinerja == "BURUK" and $usia >= 46 and $usia <= 55 and $masa_kerja >= 21 and $masa_kerja >= 30) {
				$hasil_evaluasi = "PROMOSI";
			} else if ($pendidikan == "SMA" and $kinerja == "BIASA" and $kinerja == "BURUK" and $usia >= 46 and $usia <= 55 and $masa_kerja >= 21 and $masa_kerja >= 30) {
				$hasil_evaluasi = "MUTASI";
			} else if ($pendidikan == "SMA" and $kinerja == "BIASA" and $kinerja == "BURUK" and $usia >= 46 and $usia <= 55 and $masa_kerja >= 21 and $masa_kerja >= 30) {
				$hasil_evaluasi = "PHK";
			} else if ($pendidikan == "MAGISTER" and $kinerja == "BAIK" and $kinerja == "BIASA" and $usia >= 25 and $usia <= 35 and $masa_kerja >= 0 and $masa_kerja <= 10) {
				$hasil_evaluasi = "MUTASI";
			} else if ($pendidikan == "MAGISTER" and $kinerja == "BAIK" and $kinerja == "BIASA" and $usia >= 25 and $usia <= 35 and $masa_kerja >= 0 and $masa_kerja <= 10) {
				$hasil_evaluasi = "PHK";
			} else if ($pendidikan == "MAGISTER" and $kinerja == "BAIK" and $kinerja == "BIASA" and $usia >= 25 and $usia <= 35 and $masa_kerja >= 11 and $masa_kerja <= 20) {
				$hasil_evaluasi = "MUTASI";
			} else if ($pendidikan == "MAGISTER" and $kinerja == "BAIK" and $kinerja == "BIASA" and $usia >= 25 and $usia <= 35 and $masa_kerja >= 21 and $masa_kerja >= 30) {
				$hasil_evaluasi = "PROMOSI";
			} else if ($pendidikan == "MAGISTER" and $kinerja == "BAIK" and $kinerja == "BIASA" and $usia >= 25 and $usia <= 35 and $masa_kerja >= 21 and $masa_kerja >= 30) {
				$hasil_evaluasi = "MUTASI";
			} else if ($pendidikan == "MAGISTER" and $kinerja == "BAIK" and $kinerja == "BIASA" and $usia >= 25 and $usia <= 35 and $masa_kerja >= 21 and $masa_kerja >= 30) {
				$hasil_evaluasi = "PHK";
			} else if ($pendidikan == "MAGISTER" and $kinerja == "BAIK" and $kinerja == "BIASA" and $usia >= 46 and $usia <= 55 and $masa_kerja >= 0 and $masa_kerja <= 10) {
				$hasil_evaluasi = "PROMOSI";
			} else if ($pendidikan == "MAGISTER" and $kinerja == "BAIK" and $kinerja == "BIASA" and $usia >= 46 and $usia <= 55 and $masa_kerja >= 11 and $masa_kerja <= 20) {
				$hasil_evaluasi = "PROMOSI";
			} else if ($pendidikan == "MAGISTER" and $kinerja == "BAIK" and $kinerja == "BIASA" and $usia >= 46 and $usia <= 55 and $masa_kerja >= 21 and $masa_kerja >= 30) {
				$hasil_evaluasi = "PROMOSI";
			} else if ($pendidikan == "MAGISTER" and $kinerja == "BAIK" and $kinerja == "BIASA" and $usia >= 46 and $usia <= 55 and $masa_kerja >= 21 and $masa_kerja >= 30) {
				$hasil_evaluasi = "PROMOSI";
			} else if ($pendidikan == "MAGISTER" and $kinerja == "BIASA" and $kinerja == "BURUK" and $usia >= 46 and $usia <= 55 and $masa_kerja >= 0 and $masa_kerja <= 10) {
				$hasil_evaluasi = "MUTASI";
			} else if ($pendidikan == "MAGISTER" and $kinerja == "BIASA" and $kinerja == "BURUK" and $usia >= 46 and $usia <= 55 and $masa_kerja >= 0 and $masa_kerja <= 10) {
				$hasil_evaluasi = "PHK";
			} else if ($pendidikan == "MAGISTER" and $kinerja == "BIASA" and $kinerja == "BURUK" and $usia >= 46 and $usia <= 55 and $masa_kerja >= 11 and $masa_kerja <= 20) {
				$hasil_evaluasi = "MUTASI";
			} else if ($pendidikan == "MAGISTER" and $kinerja == "BIASA" and $kinerja == "BURUK" and $usia >= 46 and $usia <= 55 and $masa_kerja >= 21 and $masa_kerja >= 30) {
				$hasil_evaluasi = "MUTASI";
			} else if ($pendidikan == "MAGISTER" and $kinerja == "BIASA" and $kinerja == "BURUK" and $usia >= 46 and $usia <= 55 and $masa_kerja >= 21 and $masa_kerja >= 30) {
				$hasil_evaluasi = "PHK";
			} else if ($pendidikan == "MAGISTER" and $kinerja == "BIASA" and $kinerja == "BURUK" and $usia >= 46 and $usia <= 55 and $masa_kerja >= 21 and $masa_kerja >= 30) {
				$hasil_evaluasi = "MUTASI";
			} else if ($pendidikan == "MAGISTER" and $kinerja == "BIASA" and $kinerja == "BURUK" and $usia >= 25 and $usia <= 35 and $masa_kerja >= 0 and $masa_kerja <= 10) {
				$hasil_evaluasi = "MUTASI";
			} else if ($pendidikan == "MAGISTER" and $kinerja == "BIASA" and $kinerja == "BURUK" and $usia >= 25 and $usia <= 35 and $masa_kerja >= 0 and $masa_kerja <= 10) {
				$hasil_evaluasi = "PHK";
			} else if ($pendidikan == "MAGISTER" and $kinerja == "BIASA" and $kinerja == "BURUK" and $usia >= 25 and $usia <= 35 and $masa_kerja >= 11 and $masa_kerja <= 20) {
				$hasil_evaluasi = "MUTASI";
			} else if ($pendidikan == "MAGISTER" and $kinerja == "BIASA" and $kinerja == "BURUK" and $usia >= 25 and $usia <= 35 and $masa_kerja >= 21 and $masa_kerja >= 30) {
				$hasil_evaluasi = "PROMOSI";
			} else if ($pendidikan == "MAGISTER" and $kinerja == "BIASA" and $kinerja == "BURUK" and $usia >= 25 and $usia <= 35 and $masa_kerja >= 21 and $masa_kerja >= 30) {
				$hasil_evaluasi = "PROMOSI";
			} else {
				$hasil_evaluasi = "PHK";
			}

			echo "<h2><center>PENGUJIAN</center></h2><br>";
			echo	"
			<table border='1' align='center' class='table table-striped table-dark'>
			
			<tr align='center'>
				<th colspan='2'>Tabel Hasil Pengujian</th>
			</tr>	
			<tr>
				<td>NAMA PEGAWAI</td>
				<td>$nama_pegawai</td>
			</tr>	
			<tr>
				<td>MASA KERJA</td>
				<td>$masa_kerja</td>
			</tr>	
			<tr>
				<td>USIA</td>
				<td>$usia</td>
			</tr>
			<tr>
				<td>PENDIDIKAN</td>
				<td>$pendidikan</td>
			</tr>
			<tr>
				<td>KINERJA</td>
				<td>$kinerja</td>
			</tr>
			<tr bgcolor='yellow'>
				<td>HASIL EVALUASI</td>
				<td>$hasil_evaluasi</td>
			</tr>
		</table>
";
		}
		?>
</body>
</center>

</html>