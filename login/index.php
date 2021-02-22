<?php include 'datadase.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="container">
 
	<form action="process.php" method="post">
		   <?php  if(isset($_GET['error'])) :?>
  		<div class="error"> <?php echo $_GET['error'];?></div>
  	<?php  endif;?>
		<input type="Email" name="email" placeholder="Enter Your Email">
		<br>
        <input type="password" name="password" placeholder="Enter Your Password">
        <br>
        <input type="submit" name="submit" value="login">
	</form>
</div>
</body>
</html>