<?php
include 'config.php';

$Fname = $Lname = $email= $password = "";
$FnameErr = $LnameErr = $emailErr=$passwordErr= "";

if (isset($_POST["user_id"]) && !empty($_POST["user_id"])) {
        
        $Fname=$_POST['Fname'];
        $Lname=$_POST['Lname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        
        $images = $_FILES["images"]["name"];
        $tempname = $_FILES["images"]["tmp_name"];    
        

               $hello = $_POST["user_id"];
if ($images !== "") {
           $sql = "UPDATE register SET Fname='$Fname',Lname='$Lname',email='$email',password='$password',images='$images' WHERE id='$hello'";
       }else{
        $sql = "UPDATE register SET Fname='$Fname',Lname='$Lname',email='$email',password='$password' WHERE id='$hello'";
       }     
          
       $move=move_uploaded_file($tempname,"myimage/". $images);
       
          if(mysqli_query($conn, $sql)){
            header("location: retrieve.php");
            }else{
            echo "not successfully";
            }
            // move file to folder
               
    mysqli_close($conn);
} else {
    if (isset($_GET["id"]) && !empty($_GET["id"])) {
        $id = $_GET["id"];
        $query = mysqli_query($conn, "SELECT * FROM register WHERE id = '$id'");

        if ($rows = mysqli_fetch_assoc($query)) {
            $Fname = $rows["Fname"];
            $Lname = $rows["Lname"];
            $email = $rows["email"];
            $password = $rows["password"];
            $images = $rows["images"];
        } else {
            header("location: retrieve.php");
            exit();
        }
        mysqli_close($conn);
    }  else {
        header("location: retrieve.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>update data</title>
    <?php include "bootstrap.php" ?>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 border p-4 mt-5 shadow-lg">
            <form method="POST" action="" name="update" enctype="multipart/form-data">
                <h2 class="">Update Record</h2>
                <input type="hidden" name="user_id" value="<?=$_GET["id"]?>">
                <label class="text-muted">First Name</label>
                <input type="text" class="form-control" name="Fname" id="Fname" value="<?php echo $Fname ?>"><br>
                <label class="text-muted">Last Name</label>
                <input type="text" class="form-control" name="Lname" id="Lname" value="<?php echo $Lname ?>"><br>
                <label class="text-muted">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="<?php echo $email ?>"><br>
                <?php echo $emailErr; ?>
                <label class="text-muted">Password</label>
                <input type="password" class="form-control" name="password" id="password" value="<?php echo $password ?>"><br>
                <?php echo $passwordErr; ?>
                <label class="text-muted">Image</label>
                <input type="file" class="form-control" name="images" id="images"><br>
                <a href="retrieve.php"><input class="btn btn-secondary" type="button" value="Back"></a>
                <input class="btn btn-primary pull-right" type="submit" value="submit">

    </form>
        </div>
    </div>
</div>
    
</body>
</html>
<script type="text/javascript">
    $(function(){
        $("form[name='update']").validate({
            rules:{
                
                Fname:"required",
                Lname:"required",
                email:{
                    required: true,
                    email:true
                },

                password:{
                    required:true,
                    minlength: 5
                }
                
            },
            messages:{
                Fname:"<p class='text-danger'>please enter your first name</p>",
                Lname:"<p class='text-danger'>please enter your last name</p>",
                email:"please enter your email",
                password:{
                    required:"<p class='text-danger'>please enter password</p>",
                    minlength:"<p class='text-danger'>enter minimum 5 digits</p>"
                },
                images:"<p class='text-danger'>insert image</p>"
            },
            submitHandler: function(form) {
            form.submit();
            }
        });
    });
</script>