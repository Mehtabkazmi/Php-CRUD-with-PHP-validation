<?php 
include 'config.php';
session_start();

$msg="";
if (count($_POST)>0) {
	
	$query=mysqli_query($conn,"select * from register where email='".$_POST["email"]."' and password='".$_POST["password"]."'");
	$rows=mysqli_fetch_array($query);

// 	if (is_array($rows)) {
// 		$_SESSION["email"]=$rows["email"];
// 	}else{
// 		$msg="invalid";
// 	}
// }
// if (isset($_SESSION["email"])) {
// 	header("location: retrieve.php");
// }
if (is_array($rows)) {
		setcookie("email",$rows["email"],time()+60,"/","", 0);
	}else{
		$msg="invalid";
	}
}
if (isset($_COOKIE["email"])) {
	header("location: retrieve.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<?php include 'bootstrap.php';?>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6 border p-4 mt-5 shadow-lg">
				<form method="post" action="#">
		
					<label>Email</label>
					<input type="email" name="email" class="form-control" id="email" placeholder="Email"><br>
					<label>Password</label>
					<input type="password" name="password" class="form-control" id="password" placeholder="Password"><br>
					<a href="retrieve.php"><input type="button" name="back" class="btn btn-secondary" value="back"></a>
					<input type="submit" name="submit" class="btn btn-primary pull-right" value="submit">

				</form>
			</div>
		</div>
	</div>

</body>
</html>