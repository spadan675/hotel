<?php
if (isset($_POST['proseslogin'])){
$user=$_POST['user'];
$pass=$_POST['pass'];

if($user=="habib" AND $pass=="123"){
	header("location:admin.php");
}
else if($user=="haikal" AND $pass=="456"){
	header("location:admin.php");
else{
	echo"
	<script>
	alert('Maaf,Username dan Password Salah::');
	window.location.href='index.php';
	

	
	
	</script>


}

	
if(($_POST['user'] == $user)  ||  ($_POST['pass'] == $pass)) {
	$_SESSION['user'] = $_POST['user'];
	header("location:admin.php");
}
if (($_POST['user'] == $userr) || ($_POST['pass'] == $passs)){
	$_SESSION['user'] = $_POST['user'];
	header("location:admin.php");
}
else{
	echo " anda bukan admin <a href='index.php'>Kembali</a>";
}

?>