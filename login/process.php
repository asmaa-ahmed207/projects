<?php

include "datadase.php";
$query ='SELECT * FROM users ';
$log=mysqli_query($con,$query);
$row =mysqli_fetch_assoc($log);

if(isset($_POST['submit'])){

$email= mysqli_real_escape_string($con,$_POST['email']) ;
$password=mysqli_real_escape_string($con,$_POST['password']);
$user_idd = $row['id'];
if(!isset($email) || $email == "" || !isset($password) || $password == ""){
    $error ='Enter Your Email And Password ';
 	header("location: index.php?error=" .urlencode($error));
 	exit();

}else{
	if ($row['email'] == $email  && $row['password'] == $password ) {
		  header("location: posts.php");
	}else{
	 $error ='Enter Your Email And Password Correct ';
	 header("location: index.php?error=" .urlencode($error));
 	exit();
	}
 
}
}


