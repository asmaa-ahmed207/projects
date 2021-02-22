<?php include 'database.php' ?>
<?php session_start(); ?>
<?php
if(!isset($_SESSION['score'])){
	$_SESSION['score'] = 0;
}

if ($_POST){
  $number = $_POST['number'];
  $select_choice=$_POST['choice'];
  $next=$number+1;

// get query total
$query= 'SELECT * FROM questions';
$result= $mysqli -> query($query);
$total=$result -> num_rows;

 // correct choice
$query = "SELECT * FROM choices
              WHERE question_number = $number AND is_correct=1";
 $result = $mysqli -> query($query);
 $row =  $result -> fetch_assoc();


 $correct_choice = $row['id'];


 if ($correct_choice == $select_choice){
 	$_SESSION['score']++;
 }   

if($number == $total){
	header("location:final.php");
	exit();
}else{
	header('location:question.php?n='.$next);
}



}