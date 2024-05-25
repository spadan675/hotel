<?php
if(isset($_SESSION['akses'])){
	header("location:admin.php");

}
else{}


if (isset($_POST['proseslogin'])){
$user=$_POST['user'];
$pass=$_POST['pass'];

if($user=="habib" AND $pass=="123"){
	$_SESSION['akses']=$user;
	header("location:admin.php");
}
else if($user=="haikal" AND $pass=="456"){
	$_SESSION['akses']=$user;
	header("location:admin.php");
}
else{
	echo"
	<script>
	alert('Maaf,Username dan Password Salah::');
	window.location.href='index.php';
	
    </script>
";
}
}
else{
	?>
<?php
	  session_start();
	  if(empty($_SESSION['akses'])){
		  echo "
		  <script>
		  alert('Mohon untuk login');
		 window.location.href='index.php';
		  </script>
		  ";
	  }
	}
?>
