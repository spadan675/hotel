<DOCTYPE html>
	<html>
	<body>

	

	<h1 align="center">LAPORAN PEMESANAN</H1>
<?php
					include "koneksii.php";
					if(isset ($_POST['btn'])) {
						mysqli_query($con,"INSERT INTO inihotel set
							tanggalcheck_in='$_POST[tanggalcin]',
							tanggalcheck_out='$_POST[tanggalcout]',
							jumlahkamar='$_POST[jumlahkamar]',
							namapemesan='$_POST[namapemesan]',
							email='$_POST[email]',
							nohandphone='$_POST[no_hp]',
							namatamu='$_POST[nama_tamu]',
							tipekamar='$_POST[tipe_kamar]'");
					 	}
				


?>

<?php
						$tanggalcheck_in=$_POST['tanggalcin'];
						$tanggalcheck_out=$_POST["tanggalcout"];
						$jumlahkamar=$_POST["jumlahkamar"];
						$namapemesan=$_POST["namapemesan"];
						$email=$_POST["email"];
						$nohandphone=$_POST["no_hp"];
						$namatamu=$_POST["nama_tamu"];
						$tipekamar=$_POST["tipe_kamar"];
						
						echo "<center><table border=2>";
						echo "</tr><td>Tanggal Chek In :</td><td>$tanggalcheck_in</td></tr>";
						echo "</tr><td>Tanggal Chek Out :</td><td>$tanggalcheck_out</td></tr>";
						echo "</tr><td>Jumlah Kamar :</td><td>$jumlahkamar</td></tr>";
						echo "</tr><td>Nama Pemesan :</td><td>$namapemesan</td></tr>";
						echo "</tr><td>Email :</td><td>$email</td></tr>";
						echo "</tr><td>No Handphone :</td><td>$nohandphone</td></tr>";
						echo "</tr><td>Nama Tamu :</td><td>$namatamu</td></tr>";
						echo "</tr><td>Tipe Kamar :</td><td>$tipekamar</td></tr>";
						echo "</center></table>";
					
						
						?>

						<script type="text/javascript">
window.print();
						</script>
		</body>
	</html>