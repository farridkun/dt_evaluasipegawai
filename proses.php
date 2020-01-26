<?php
// Load file config.php
include "config.php";

//TAHAP 1
/*--------------------------------------------------------------------------------------------------------------------------------------------*/
//keseluruhan

echo "
		<h1><center>LANGKAH KE 1</center>
		<table border='1' align='center' class='table table-striped table-dark'>
			<tr align='center'>
				<th>Atribut</th>
				<th></th>
				<th>Banyak Kasus</th>
				<th>Promosi</th>
				<th>Mutasi</th>
				<th>PHK</th>
				<th>Entropi</th>
				<th>Gain</th>
			</tr>
			<tr align='center'>
				<td> Kasus</td>
				<td></td>
				<td>33</td>
				<td>15</td>
				<td>12</td>
				<td>6</td>
				<td>1.494918848</td>
				<td>0.220667825</td>
			</tr>		
		
			<tr align='center'>
				<td>Masa Kerja</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr align='center'>
				<td></td>
				<td>0-10</td>
				<td>12</td>
				<td>3</td>
				<td>5</td>
				<td>4</td>
				<td>1.554585169</td>
				<td></td>
			</tr>
			<tr align='center'>
				<td></td>
				<td>11-20</td>
				<td>18</td>
				<td>11</td>
				<td>5</td>
				<td>2</td>
				<td>1.299736764</td>
				<td></td>
			</tr>
			<tr align='center'>
				<td></td>
				<td>21-30</td>
				<td>3</td>
				<td>1</td>
				<td>2</td>
				<td>0</td>
				<td>0</td>
				<td></td>
			</tr>
		
			<tr align='center'>
				<td>Usia</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr align='center'>
				<td></td>
				<td>25-35</td>
				<td>13</td>
				<td>9</td>
				<td>1</td>
				<td>3</td>
				<td>1.140115679</td>
				<td>0.462931958</td>
			</tr>
			<tr align='center'>
				<td></td>
				<td>36-45</td>
				<td>5</td>
				<td>1</td>
				<td>3</td>
				<td>2</td>
				<td>1.435336213</td>
				<td></td>
			</tr>
			<tr align='center'>
				<td></td>
				<td>46-55</td>
				<td>9</td>
				<td>4</td>
				<td>4</td>
				<td>0</td>
				<td>0</td>
				<td></td>
			</tr>
		
			<tr align='center'>
				<td>Pendidikan</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr align='center'>
				<td></td>
				<td>SMA</td>
				<td>13</td>
				<td>9</td>
				<td>1</td>
				<td>3</td>
				<td>1.140115679</td>
				<td>0.255660129</td>
			</tr>
			<tr align='center'>
				<td></td>
				<td>SARJANA</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr align='center'>
				<td></td>
				<td>MAGISTER</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>

			<tr align='center'>
				<td>Kinerja</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr align='center'>
				<td></td>
				<td>BAIK</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr align='center'>
				<td></td>
				<td>BIASA</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
				<tr align='center'>
				<td></td>
				<td>BURUK</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr align='right'>
				<td colspan='7'>MAX Gain </td>
				<td></td>
			</tr>
		</table>
";

echo "
		<h1><center>LANGKAH KE 2</center>
		<table border='1' align='center' class='table table-striped table-dark'>
			<tr align='center'>
				<th>Atribut</th>
				<th></th>
				<th>Banyak Kasus</th>
				<th>Promosi</th>
				<th>Mutasi</th>
				<th>PHK</th>
				<th>Entropi</th>
				<th>Gain</th>
			</tr>
			<tr align='center'>
				<td> Kasus</td>
				<td></td>
				<td>33</td>
				<td>15</td>
				<td>12</td>
				<td>6</td>
				<td></td>
				<td>x</td>
			</tr>		
		
			<tr align='center'>
				<td>Masa Kerja</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr align='center'>
				<td></td>
				<td>0-10</td>
				<td>12</td>
				<td>3</td>
				<td>5</td>
				<td>4</td>
				<td></td>
				<td></td>
			</tr>
			<tr align='center'>
				<td></td>
				<td>11-20</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr align='center'>
				<td></td>
				<td>21-30</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		
			<tr align='center'>
				<td>Usia</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr align='center'>
				<td></td>
				<td>25-35</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr align='center'>
				<td></td>
				<td>36-45</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr align='center'>
				<td></td>
				<td>46-55</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		
			<tr align='center'>
				<td>Pendidikan</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr align='center'>
				<td></td>
				<td>SMA</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr align='center'>
				<td></td>
				<td>SARJANA</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr align='center'>
				<td></td>
				<td>MAGISTER</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>

			<tr align='center'>
				<td>Kinerja</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr align='center'>
				<td></td>
				<td>BAIK</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr align='center'>
				<td></td>
				<td>BIASA</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
				<tr align='center'>
				<td></td>
				<td>BURUK</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr align='right'>
				<td colspan='7'>MAX Gain </td>
				<td></td>
			</tr>
		</table>
";

echo "
		<h1><center>LANGKAH KE 3</center>
		<table border='1' align='center' class='table table-striped table-dark'>
			<tr align='center'>
				<th>Atribut</th>
				<th></th>
				<th>Banyak Kasus</th>
				<th>Promosi</th>
				<th>Mutasi</th>
				<th>PHK</th>
				<th>Entropi</th>
				<th>Gain</th>
			</tr>
			<tr align='center'>
				<td> Kasus</td>
				<td></td>
				<td>33</td>
				<td>15</td>
				<td>12</td>
				<td>6</td>
				<td></td>
				<td>x</td>
			</tr>		
		
			<tr align='center'>
				<td>Masa Kerja</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr align='center'>
				<td></td>
				<td>0-10</td>
				<td>12</td>
				<td>3</td>
				<td>5</td>
				<td>4</td>
				<td></td>
				<td></td>
			</tr>
			<tr align='center'>
				<td></td>
				<td>11-20</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr align='center'>
				<td></td>
				<td>21-30</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		
			<tr align='center'>
				<td>Usia</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr align='center'>
				<td></td>
				<td>25-35</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr align='center'>
				<td></td>
				<td>36-45</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr align='center'>
				<td></td>
				<td>46-55</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		
			<tr align='center'>
				<td>Pendidikan</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr align='center'>
				<td></td>
				<td>SMA</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr align='center'>
				<td></td>
				<td>SARJANA</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr align='center'>
				<td></td>
				<td>MAGISTER</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>

			<tr align='center'>
				<td>Kinerja</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr align='center'>
				<td></td>
				<td>BAIK</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr align='center'>
				<td></td>
				<td>BIASA</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
				<tr align='center'>
				<td></td>
				<td>BURUK</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr align='right'>
				<td colspan='7'>MAX Gain </td>
				<td></td>
			</tr>
		</table>
";
echo "
		<h1><center>LANGKAH KE 4</center>
		<table border='1' align='center' class='table table-striped table-dark'>
			<tr align='center'>
				<th>Atribut</th>
				<th></th>
				<th>Banyak Kasus</th>
				<th>Promosi</th>
				<th>Mutasi</th>
				<th>PHK</th>
				<th>Entropi</th>
				<th>Gain</th>
			</tr>
			<tr align='center'>
				<td> Kasus</td>
				<td></td>
				<td>33</td>
				<td>15</td>
				<td>12</td>
				<td>6</td>
				<td></td>
				<td>x</td>
			</tr>		
		
			<tr align='center'>
				<td>Masa Kerja</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr align='center'>
				<td></td>
				<td>0-10</td>
				<td>12</td>
				<td>3</td>
				<td>5</td>
				<td>4</td>
				<td></td>
				<td></td>
			</tr>
			<tr align='center'>
				<td></td>
				<td>11-20</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr align='center'>
				<td></td>
				<td>21-30</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		
			<tr align='center'>
				<td>Usia</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr align='center'>
				<td></td>
				<td>25-35</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr align='center'>
				<td></td>
				<td>36-45</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr align='center'>
				<td></td>
				<td>46-55</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		
			<tr align='center'>
				<td>Pendidikan</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr align='center'>
				<td></td>
				<td>SMA</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr align='center'>
				<td></td>
				<td>SARJANA</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr align='center'>
				<td></td>
				<td>MAGISTER</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>

			<tr align='center'>
				<td>Kinerja</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr align='center'>
				<td></td>
				<td>BAIK</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr align='center'>
				<td></td>
				<td>BIASA</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
				<tr align='center'>
				<td></td>
				<td>BURUK</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr align='right'>
				<td colspan='7'>MAX Gain </td>
				<td></td>
			</tr>
		</table>
";

echo	"
		<br>
		<h1><center>RULES</center>
			<table border='1' align='center' class='table table-striped table-dark'>
	<tr align='center'>
		<th>PENDIDIKAN</th> <th>KINERJA</th> <th>USIA</th> <th>MASA KERJA</th> <th>HASIL KEPUTUSAN</th> 
	</tr>
	<tr align='center'>
	<td> SMA</td> <td>BAIK</td> <td>25-35</td> <td>0-10</td> <td>PROMOSI</td>
	</tr>
	<tr align='center'>
	<td> SARJANA</td> <td>BIASA</td> <td>36-45</td> <td>11-20</td> <td>MUTASI</td>
	</tr>
	<tr align='center'>
	<td> MAGISTER</td> <td>BURUK</td> <td>46-55</td> <td>21-30</td> <td>PHK</td>
	</tr>
	<tr align='center'>
	<td> MAGISTER</td> <td>BAIK</td> <td>25-35</td> <td>0-10</td> <td>PROMOSI</td>
	</tr>
	<tr align='center'>
	<td>  </td> <td>  </td> <td>  </td> <td>  </td>  <td>  </td>
	</tr><br>
		<tr align='center'>
	<td> SARJANA</td> <td>BAIK</td> <td>25-35</td> <td>0-10</td> <td>PROMOSI</td>
	</tr>
	<tr align='center'>
	<td> SMA</td> <td>BAIK</td> <td>25-35</td> <td>0-10</td> <td>MUTASI</td>
	</tr>
	<tr align='center'>
	<td> SARJANA</td> <td>BIASA</td> <td>36-45</td> <td>11-20</td> <td>MUTASI</td>
	</tr>
	<tr align='center'>
	<td> SARJANA</td> <td>BAIK</td> <td>46-55</td> <td>11-20</td> <td>PROMOSI</td>
	</tr>
	<tr align='center'>
	<td>  </td> <td>  </td> <td>  </td> <td>  </td>  <td>  </td>
	</tr>
		<tr align='center'>
	<td> SARJANA</td> <td>BIASA</td> <td>36-45</td> <td>11-20</td> <td>MUTASI</td>
	</tr>
	<tr align='center'>
	<td> SMA</td> <td>BAIK</td> <td>46-55</td> <td>11-20</td> <td>PROMOSI</td>
	</tr>
	<tr align='center'>
	<td> SARJANA</td> <td>BAIK</td> <td>46-55</td> <td>11-20</td> <td>PROMOSI</td>
	</tr>
	<tr align='center'>
	<td> SARJANA</td> <td>BIASA</td> <td>36-45</td> <td>11-20</td> <td>MUTASI</td>
	</tr>
	<tr align='center'>
	<td>  </td> <td>  </td> <td>  </td> <td>  </td>  <td>  </td>
	</tr>
	
		<tr align='center'>
	<td> MAGISTER</td> <td>BIASA</td> <td>35-45</td> <td>0-10</td> <td>PHK</td>
	</tr>
	<tr align='center'>
	<td> MAGISTER</td> <td>BIASA</td> <td>35-45</td> <td>11-20</td> <td>PHK</td>
	</tr>
	<tr align='center'>
	<td> MAGISTER</td> <td>BIASA</td> <td>35-45</td> <td>21-30</td> <td>MUTASI</td>
	</tr>
	<tr align='center'>
	<td> MAGISTER</td> <td>BIASA</td> <td>35-45</td> <td>31-40</td> <td>PHK</td>
	</tr>
	<tr align='center'>
	<td>  </td> <td>  </td> <td>  </td> <td>  </td>  <td>  </td>
	</tr>
	
		<tr align='center'>
	<td> SARJANA</td> <td>BIASA</td> <td>25-35</td> <td>0-10</td> <td>MUTASI</td>
	</tr>
	<tr align='center'>
	<td> SARJANA</td> <td>BIASA</td> <td>36-45</td> <td>11-20</td> <td>PROMOSI</td>
	</tr>
	<tr align='center'>
	<td> SARJANA</td> <td>BIASA</td> <td>46-55</td> <td>21-30</td> <td>PROMOSI</td>
	</tr>
	<tr align='center'>
	<td> SARJANA</td> <td>BIASA</td> <td>55-60</td> <td>31-40</td> <td>PHK</td>
	</tr>
	<tr align='center'>
	<td>  </td> <td>  </td> <td>  </td> <td>  </td>  <td>  </td>
	</tr>
	
		<tr align='center'>
	<td> SARJANA</td> <td>BURUK</td> <td>25-35</td> <td>0-10</td> <td>PHK</td>
	</tr>
	<tr align='center'>
	<td> SARJANA</td> <td>BURUK</td> <td>36-45</td> <td>21-30</td> <td>PHK</td>
	</tr>
	<tr align='center'>
	<td> SARJANA</td> <td>BURUK</td> <td>46-55</td> <td>31-40</td> <td>PHK</td>
	</tr>
	<tr align='center'>
	<td> SARJANA</td> <td>BURUK</td> <td>56-60</td> <td>40-50</td> <td>PHK</td>
	</tr>
	<tr align='center'>
	<td>  </td> <td>  </td> <td>  </td> <td>  </td>  <td>  </td>
	</tr>
		<tr align='center'>
		<td> SMA</td> <td>BURUK</td> <td>25-35</td> <td>0-10</td> <td>PHK</td>
		</tr>
		<tr align='center'>
		<td> SMA</td> <td>BURUK</td> <td>36-45</td> <td>21-30</td> <td>PHK</td>
		</tr>
		<tr align='center'>
		<td> SMA</td> <td>BURUK</td> <td>46-55</td> <td>31-40</td> <td>PHK</td>
		</tr>
		<tr align='center'>
		<td> SMA</td> <td>BURUK</td> <td>56-60</td> <td>40-50</td> <td>PHK</td>
		</tr>
	<tr align='center'>
	<td>  </td> <td>  </td> <td>  </td> <td>  </td>  <td>  </td>
	</tr>
	
</table>	

";

?>
<br>
<html>

<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
</head>

<body class="p-3 mb-2 bg-primary text-white">
	<div class="container-fluid">
		<center>
			<button class="btn btn-dark"><a href="pengujian.php" class="text-white"><b>Pengujian</b></a></button></center>
	</div>
</body>

</html>