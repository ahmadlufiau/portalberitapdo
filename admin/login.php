<?php
session_start();
include"conn.php";
include"conf.php";
	
if(!isset($_SESSION['username'] )== 0) {
	header('Location: index.php');
}

if(isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	try {
		$sql = "SELECT * FROM login WHERE username = :username AND password = :password";
		$stmt = $koneksi->prepare($sql);
		$stmt->bindParam(':username', $username);
		$stmt->bindParam(':password', $password);
		$stmt->execute();
		$count = $stmt->rowCount();
		if($count == 1) {
			$_SESSION['username'] = $username;
			header("Location: index.php");
			return;
		}else{
			?> <script type="text/javascript">alert("Username / Password yang Anda Masukkan Salah")</script> <?php
		}
	}
	catch(PDOException $e) {
		echo $e->getMessage();
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
<style type="text/css">
body{
	font-family:arial;
	font-size:14px;
	background-color:#d9dbda;
}

#utama{
	width:300px;
	margin: 0 auto;
	margin-top:12%;
}

#judul{
	padding:15px;
	text-align:center;
	color:#fff;
	font-size:20px;
	background-color:#42a3f4;
	border-top-right-radius:10px;
	border-top-left-radius:10px;
	border-bottom:3px solid #46759b;
}

#inputan{
	background-color:#fff;
	padding:20px;
	border-bottom-right-radius:10px;
	border-bottom-left-radius:10px;
}

input{
	padding:10px;
	border: 0;
	background-color: #f5f7f6;
}

.lg{
	width:240px;
}

.btn{
	background-color:#42A3F4;
	border-radius:10px;
	color:#fff;
}

.btn:hover{
	background-color:#46759B;
	cursor:pointer;
}

</style>
</head>
<body>
<div id="utama">
	<div id="judul">
		LOGIN <br>
		<i class="fa fa-lock fa-3x" aria-hidden="true"></i>
	</div>
	<div id="inputan">
	<form action="" method="post">
		<div>
			<input type="text" name="username" placeholder="Username" class="lg" />
		</div>
		<div style="margin-top:10px;">
			<input type="password" name="password" placeholder="Password" class="lg" />
		</div>
		<div style="margin-top:10px;">
			<input type="submit" name="login" value="Login" class="btn" />
		</div>
	</form>
	</div>
</div>
</body>
</html>