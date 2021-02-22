<?php

// creat connection 
$db_host      ="localhost";
$db_name      ="quizzer";
$db_user      ='root';
$db_password  ='';
// creat mysql object
$mysqli = new mysqli($db_host  , $db_user ,$db_password , $db_name);
if($mysqli -> connect_error){
	echo "there are error";
	exit();
}else{
	// echo "no error";
}