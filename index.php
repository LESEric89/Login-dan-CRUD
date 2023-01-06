<!DOCTYPE html>
<html>
<head>
	<title>HALAMAN LOGIN</title>
</head>
<body>
<center>
<br/>
<br/>
 
	<h1>LOGIN UJIAN</h1>
 
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" placeholder="Username .." required="required">
			<br/><br/>
			<label>Password </label>
			<input type="password" name="password" placeholder="Password .." required="required">
			<br/>
			<br/>
			<input type="submit" value="LOGIN">
 
			<br/>
			<br/>
		
		</form>
		
	</div>
 </center>
</body>
</html>