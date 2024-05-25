<?php

include "koneksii.php";

$kode =$_GET['kode'];
$hapus = mysqli_query($con,"delete from inihotel where tanggalcheck_in ='$kode'");

if($hapus)
	{
		header("location:adminkamar.php");
}



?>

