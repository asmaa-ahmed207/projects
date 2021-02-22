<?php include 'database.php';?>
<?php session_start(); ?>

<?php
$number =(int) $_GET['n'];
// get query for question 
$query = "SELECT * FROM questions
              WHERE question_number = $number";
$result = $mysqli->query($query) ;
$question = $result -> fetch_assoc();
// get query for choice
$query = "SELECT * FROM choices
              WHERE question_number =$number";
$choice = $mysqli->query($query) ;
// get query total question 
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
			<div class="current"> Question <?php echo $question['question_number'];?>from  <?php echo $total;?></div>
			<p class="question"> 
               <?php echo $question ['text'];?>
			</p>
			<form method="post" action="process.php">
				<ul class="choices">
					<?php while( $row = $choice->fetch_assoc()): ;?>
						<li><input type="radio" name="choice" value=<?php echo $row['id'];?>> <?php echo $row['text'];?></li>
					<?php endwhile ;?>
				</ul>
				<input type="submit"  value="submit">
				<input type="hidden" name="number" value="<?php echo $number;?>">
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