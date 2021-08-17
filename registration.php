<?php
    include 'config.php';
    error_reporting(0);

    $emailErr=$passwordErr=$cpasswordErr =$passErr= "";
    $email=$password=$cpassword=$pass= "";

    if ($_SERVER["REQUEST_METHOD"]=="POST") {
    	if (empty($_POST["email"])) {
			$emailErr="Email is required";
		}else{
			$email = test_input($_POST["email"]);
		}
		if (empty($_POST["password"])) {
			$passwordErr="password is required";
		}else{
			$password=test_input($_POST["password"]);
		}
		if (empty($_POST["cpassword"])) {
			$cpasswordErr="Confirm password is required";
		}else{
			$cpassword=test_input($_POST["cpassword"]);
		}
		if ($_POST["password"] != $_POST["cpassword"]) {
			$passErr="password is not equal";
		}

    }
    function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }

    if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	$gender=$_POST['gender'];
 
 	$pieces=explode(' ',$name);
 	$Fname= $pieces[0];
 	$Lname= $pieces[1];

// $a=explode(',',$row["img"]);
// 		for($i=0;$i<count($a);$i++) {
// 		echo'<img height="100px" src="upload_images/'.$a[$i].'" >';}
// 		}

 	$images = $_FILES["images"]["name"];
    $tempname = $_FILES["images"]["tmp_name"];
        $folder = "myimage/".$images;

		$query="insert into register VALUES(NULL,'$Fname','$Lname','$email','$password', '$cpassword', '$gender','$images')";
if ("select email from register where email=$email") {
		echo "this email already exist";
	}
	if(mysqli_query($conn, $query)){
		echo "inserted successfully..!";
	}else{
		echo "not successfully";
	}
if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
 
	
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration form</title>
	<?php include 'bootstrap.php'?>
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6  border p-4 mt-5 shadow-lg">
			<form method="POST" action="#"  enctype="multipart/form-data">
		
				<label class="text-muted">Name</label>
				<input type="text" class="form-control" name="name" id="name" placeholder="Name"><br>
				<label class="text-muted">Email</label>
				<input type="email" class="form-control" name="email" id="email" placeholder="Email"><br>
				<?php echo $emailErr; ?>
				<label class="text-muted">Password</label>
				<input type="password" class="form-control" name="password" id="password" placeholder="Password"><br>
				<?php echo $passwordErr; ?>
				<label class="text-muted">Confirm Password</label>
				<input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Contirm Password"><br>
				<?php echo $cpasswordErr; ?>
				<label class="text-muted">Gender</label><br>
				<input type="radio"name="gender" id="gender" value="0">male
				<input type="radio" name="gender" id="gender" value="1">female<br>
				<label class="text-muted">Image</label>
				<input type="file" class="form-control" name="images" id="images"><br>
				<a href="retrieve.php"><input class="btn btn-secondary" type="button" value="Back"></a>
				<input type="submit" class="btn btn-primary pull-right" name="submit" value="submit">

			</form>
		</div>
	</div>
</div>
	
</body>
</html>