<?php 
	
	$url='localhost';
    $username='root';
    $password='';
    $database="registration";
    $conn=mysqli_connect($url,$username,$password,$database);
    if(!$conn){
        die('Not Connected' .mysql_error());
    }
 ?>
