<?php
    include 'config.php';
    if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	$gender=$_POST['gender'];
 
 	$pieces=explode(' ',$name);
 	$Fname= $pieces[0];
 	$Lname= $pieces[1];


 	$images = $_FILES["images"]["name"];
    $tempname = $_FILES["images"]["tmp_name"];
        $folder = "image/".$images;

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
	<title>jquery validation.</title>
	<?php include 'bootstrap.php'; ?>

</head>
<body>

	<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6  border p-4 mt-5 shadow-lg">
			<form method="POST" action="#" name="registration"  enctype="multipart/form-data">
		
				<label class="text-muted">Name</label>
				<input type="text" class="form-control" name="name" id="name" placeholder="Name"><br>
				<label class="text-muted">Email</label>
				<input type="email" class="form-control" name="email" id="email" placeholder="Email"><br>
				<label class="text-muted">Password</label>
				<input type="password" class="form-control" name="password" id="password" placeholder="Password"><br>
				<label class="text-muted">Confirm Password</label>
				<input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Contirm Password"><br>
				<label class="text-muted">Gender</label><br>
				<input type="radio" name="gender" id="gender" value="0">male
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
<script type="text/javascript">
	
	$(function(){
		$("form[name='registration']").validate({
			rules:{
				
				name:"required",
				email:{
					required: true,
					email:true
				},

				password:{
					required:true,
					minlength: 5
				},
				cpassword: {
                    equalTo: "#password"
                },
				images:"required"
			},
			messages:{
				name:"please enter your name",
				email:"please enter your email",
				password:{
					required:"please enter password",
					minlength:"enter minimum 5 digits"
				},
				cpassword: " Enter Confirm Password Same as Password",
				images:"insert image"
			},
			submitHandler: function(form) {
		    form.submit();
		    }
		});
	});
</script>