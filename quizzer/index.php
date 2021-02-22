<?php include 'database.php';?>

<?php
// get query 
$query= 'SELECT * FROM questions';
$result= $mysqli -> query($query);
$total=$result -> num_rows;



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
			<h2>Test Your PHP Knowloedge  </h2>
			<p>this is multiple choice quize to test the knowledge of php</p>
			<ul>
				<li> <strong> Number Of Question : </strong> <?php echo $total;?> </li>
                <li> <strong> type: </strong> multiple choice </li>
                <li> <strong> time :</strong> <?php echo $total * 0.5 ;?>min </li>
			</ul>
			
			<a href="question.php?n=1" class="start"> start quiz</a>
		</div>
	</main>
	<footer>
		<div class="container">
			copyright &copy,2020 ,php quizzer
		</div>
	</footer>

</body>
</html>