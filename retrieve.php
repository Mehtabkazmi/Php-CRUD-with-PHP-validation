<?php include 'config.php';
session_start();?>


<!DOCTYPE html>
<html>
<head>
	<title>Retrieve Data</title>
	<?php include 'bootstrap.php';?>
</head>
<style type="text/css">
	img{
		width: 100px;
	}
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
  <a class="navbar-brand" href="#">Navbar</a>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <?php 
      if (isset($_COOKIE["email"])) {?>
      <li class="nav-item"><a class="nav-link" href="logout.php">LogOut</a></li>
      <li class="nav-item"><a class="nav-link" href=""><?php echo $_COOKIE["email"]; ?></a></li>
      
      <?php 
  	  }else{?>
      <li class="nav-item"><a class="nav-link active" href="login.php">Login</a></li>
<?php  }?>
    </ul>
  </div>
</nav>
<div class="container">
	<a href="registration.php"><input type="button" class="btn btn-primary mb-3" value="Insert New Record" name=""></a>
	<form>
		<table class="table table-striped">
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Gender</th>
				<th>Image</th>
				<th>Update</th>
				<th>Delete</th>
			</tr>

<?php 
	$query=mysqli_query($conn, "SELECT id,Fname,Lname,email,gender,images FROM register");

  	while($rows=mysqli_fetch_array($query)) {?>
    	<tr>
		<td><?php echo $rows['Fname']; ?></td>
		<td><?php echo $rows['Lname']; ?></td>
		<td><?php echo $rows['email']; ?></td>
		<td><?php if($rows['gender']==0){ echo "Male"; }else{ echo "Female"; } ?></td>
		<td><?php echo "<img src='myimage/".$rows['images']."' >" ?></td>
		<td><?php echo '<a href="update.php?id='. $rows['id'] .'"><span class="fa fa-pencil"></span></a>'; ?></td>
		<td><?php echo '<a href="delete.php?id='. $rows['id'] .'"><span class="fa fa-trash" onclick="myfunction()"></span></a>'; ?></td>
		</tr>
		<?php } ?>
			
		</table>
	</form>

</div>

</body>
</html>
<script type="text/javascript">
	function myfunction(){
		alert("are you sure?");
	}
</script>