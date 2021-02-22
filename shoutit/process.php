<?php

include"database.php";

//submited
if(isset($_POST['submit'])) {
 $user= mysqli_real_escape_string($con, $_POST['user']);
 $message= mysqli_real_escape_string($con, $_POST['message']);
 
 // time 
 date_default_timezone_set('Egypt');
 $time=date('h:m:s a' ,time());

 // check
 if(!isset($user) || $user == '' || !isset($message) || $message == ''){
 	$error ='Enter Your Name And Message';
 	header("location: index.php?error=" .urlencode($error));
 	exit();

 }else{
 	$query ="INSERT INTO shouts (user, message,time)
 	VALUES('$user','$message' ,'$time') ";
 	if(!mysqli_query($con,$query)){
 		die('Error:' . mysqli_error($con));

 	}else{
     header('location: index.php');
     exit();
 	}
 }

}