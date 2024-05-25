<!DOCTYPE html>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="style1admin.css">
</head>
<body>
	

<?php
if (isset($_POST['proseslogin'])){
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	
	if($user=="habib" AND $pass=="123"){
		$_SESSION['akses']=$user;
		header("location:adminkamar.php");
	}
	else if($user=="haikal" AND $pass=="456"){
		$_SESSION['akses']=$user;
		header("location:adminkamar.php");
	}
	else{
		echo"
		<script>
		alert('Maaf,Username dan Password Salah');
		window.location.href='index.php';
		</script>
	";
	}
	}
	else{
		?>
<div class="login-box">
<h1>Login Here</h1>
<form method="post" action="">
<p>Username</p>
	<input type="text" name="user" placeholder="Masukkan Username" autocomplete="off" autofocus>
<p>Password</p>
<input type="password" name="pass" placeholder="Masukkan Password" autocomplete="off">
		<button type="submit" name="proseslogin">LOGIN</button></center>
			</form>
			</div>
	<?php
	}
	?>
</body>
</html>