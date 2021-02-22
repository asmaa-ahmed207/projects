<?php include 'database.php';?>
<?php session_start(); ?>


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
			<h2>You Are Done !</h2>
			<p>congrate You Have Complated Test </p>
			<p>final score : <?php echo $_SESSION['score']; session_destroy(); ?> </p>
			<a href="question.php?n=1" class="start"> Take Again</a>
		</div>
	</main>
	<footer>
		<div class="container">
			copyright &copy,2020 ,php quizzer
		</div>
	</footer>

</body>
</html>