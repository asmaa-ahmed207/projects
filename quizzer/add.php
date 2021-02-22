<?php include 'database.php';?>
<?php
// total
$query =  'SELECT * FROM questions';
$result= $mysqli -> query($query);
$total = $result -> num_rows;
$next= $total+1;
if (isset($_POST['submit'])){
	$question_number=$_POST['question_number'];
	$question_text =$_POST['question_text'];
	$correct_choice=$_POST['correct_choice'];
	$time_question =$_POST['time_question'];
	 $choices=array();
    $choices[1]=$_POST['choice1'];
    $choices[2]=$_POST['choice2'];
    $choices[3]=$_POST['choice3'];
    $choices[4]=$_POST['choice4'];


	$query = "INSERT INTO questions (question_number , text)
                     VALUES ( '$question_number' , '$question_text')";
    $insert= $mysqli -> query($query) or die($mysqli-> error.__LINE__) ;
    
    if($insert){
    	foreach ($choices as $choice => $value) {
    		if($value !=""){
    			if($correct_choice == $choice){
    				$is_correct=1;
    			}else{
                   $is_correct=0;
    			}
    }
 	$query = "INSERT INTO choices (question_number , is_correct ,text,time)
                     VALUES ( '$question_number' ,'$is_correct', '$value','$time_question')";
    $insert= $mysqli -> query($query) or die($mysqli-> error.__LINE__) ;

    		}
    	}
    	$mesg="questions has been add";
    }




?>

<!DOCTYPE html>
<html>
<head>
	<title>QUIZZER</title>
	<link rel="stylesheet" type="text/css" href=" css/style.css">
</head>
<body>
	<header>
		<div class="container">
			<h1>PHP Quizzer</h1>
		</div>
	</header>
	<main>
		<div class="container">
		 <h2> Add A Question</h2>
		 <?php 
		 if(isset($mesg)){
		  echo $mesg;
		}
		?>
		 
		 <form method="post" action="add.php">
		 	<p>
		 		<label>Question Number : </label>
		 		<input type="number" name="question_number" value=<?php echo $next;?>>
		 	</p>
		 	<p>
		 		<label>Question text : </label>
		 		<input type="text" name="question_text">
		 	</p>
		 	<p>
		 		<label>choice #1: </label>
		 		<input type="text" name="choice1">
		 	</p>
		 	<p>
		 		<label>choice #2: </label>
		 		<input type="text" name="choice2">
		 	</p>
		 	<p>
		 		<label>choice #3: </label>
		 		<input type="text" name="choice3">
		 	</p>
		 	<p>
		 		<label>choice #4: </label>
		 		<input type="text" name="choice4">
		 	</p>
		 	<p>
		 		<label>Correct Choice Number  : </label>
		 		<input type="Number" name="correct_choice">
		 	</p>
		 	<p>
		 		<label>time for each question   : </label>
		 		<input type="Number" name="time_question">
		 	</p>
		 	<p>
		 		<input type="submit" name="submit">
		 	</p>
		 	
		 </form>
		</div>
	</main>
	<footer>
		<div class="container">
			copyright &copy,2020 ,php quizzer
		</div>
	</footer>

</body>
</html>