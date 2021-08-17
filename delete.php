<?php
include "config.php";

// if (isset($_POST["id"]) && !empty($_POST["id"])) {
if (isset($_REQUEST["id"])) {
    $id = $_REQUEST["id"];
    $sql="select * from register WHERE id=$id";

    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);

    // $imageFile=$_POST['images'];
    $query = "DELETE FROM register WHERE id = '$id'";
    
        unlink("myimage/".$row["images"]);

    if (mysqli_query($conn, $query)) {
        header("location: retrieve.php");
    } else {
         echo "error";
    }

    mysqli_close($conn);
} else {
    if (empty(trim($_GET["id"]))) {
        echo "Empty";
        header("location: retrieve.php");
    }
}
?>