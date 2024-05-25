<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>pemesanan</title>
	<link rel="stylesheet" href="style4.css">
</head>
<body>
	

	</head>
	<body>
	<div class="home">
	<h1>HOTEL HEBAT</h1>
	</div>
<div class="nav">
<ul id="list">
<li><a href="index.php">HOME</a></li>
<li><a href="kamar.php">KAMAR </a></li>
<li><a href="fasilitas.php">FASILITAS  </a></li>
</ul>
<img src="images/hotel.jpg"width="98%"height="400px"> 	

<center><table cellspacing="0"width="75%" >
<tr>

	<td>TANGGAL CHECK IN</td>
	<td>TANGGAL CHECK OUT</td>
	<td>JUMLAH KAMAR</td>
</tr>
<form action="aksiipesan.php" method="POST">
<tr>
<td><input type="date" name="tanggalcin"></td>
<td><input type="date" name="tanggalcout"></td>
<td><input type="number" name="jumlahkamar"></td>
</table><br>

	<table cellspacing="10" width="70%">
		<tr>
			<td>NAMA PEMESANAN</td>
			<td><input type="text" name="namapemesan"></td>
		</tr>
		<tr>
			<td>EMAIL</td>
			<td><input type="Email" name="email"></td>
		</tr>
		<tr>
			<td>NO HANDPHONE</td>
			<td><input type="number" name="no_hp"></td>
		</tr>
		<tr>
			<td>NAMA TAMU</td>
			<td><input type="text" name="nama_tamu"></td>
		</tr>
		<tr>
			<td>TIPE KAMAR</td>
			<td><select name="tipe_kamar">
	<option value="Superior">SUPERIOR</option>
	<option value="Deluxe">DELUXE</option></select></td>
		</tr>
		</table>
			<br><button type="submit" name="btn">KONFIRMASI PEMESANAN</button></center>
		
		
</form>
	</div>
	</body>
	</html>