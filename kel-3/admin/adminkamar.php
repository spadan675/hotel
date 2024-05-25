<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin-kamar</title>
    <link rel="stylesheet" href="style2adminkamar.css">
</head>
<body>

        
<div class="home">
	<h1><marquee>HOTEL RORONOA</marquee></h1>
	</div>
<div class="nav">
<center><tr>
<td width="30%"><h2>Admin</td></h2></tr>   
<ul id="list">
<li><a href="index.php">HOME</a></li>
<li><a href="adminkamar.php">KAMAR </a></li>
<ul></center>



<center>
<table border="1" cellpadding="10" width="1000" >
<tr>
<th bgcolor="pink">No</th>
        <th width="500"height="50"bgcolor="pink">Tipe kamar</th>
        <th width="350"height="50"bgcolor="pink">Jumlah Kamar</th>
        
        <th colspan="2" width="20" bgcolor="pink">Aksi</th>
    </tr>

    <?php
    include "koneksii.php";

    $no=1;
    $ambildata = mysqli_query($con,"select * from inihotel");
    while($tampil = mysqli_fetch_array($ambildata)){

        $warna=($no%2==1)?"white":"#eee";
        echo "
        <tr bgcolor='$warna'  >
            <td>$no</td>
            <td>$tampil[tipekamar]</td>
            <td>$tampil[jumlahkamar]</td>
	         
            <td><a href='hapus.php?kode=$tampil[tipekamar]'> Hapus </a></td>
            <td><a href='ubah.php?kode=$tampil[tipekamar]'> Ubah </a></td>
        <tr>";
        $no++;
    }
    ?>
    </table></center>

    
            </body>
</html>
