
<?php include 'datadase.php';
$posts = mysqli_query($con, "SELECT * FROM posts");
 ?>

<?php 
$query ='SELECT * FROM users';
$log=mysqli_query($con,$query);
$row =mysqli_fetch_assoc($log);
$idd = $row['id'];

$query ='SELECT * FROM posts';
$post =mysqli_query($con,$query);

	if (isset($_POST['liked'])) {
		$post_id = $_POST['post_id'];
		$result = mysqli_query($con, "SELECT * FROM posts WHERE id=$post_id");
		$row = mysqli_fetch_array($result);
		$n = $row['likes'];

		mysqli_query($con, "INSERT INTO likes (user_id, post_id) VALUES ($idd, $post_id)");
		mysqli_query($con, "UPDATE posts SET likes=$n+1 WHERE id=$post_id");

		echo $n+1;
		exit();
	}

	if (isset($_POST['unliked'])) {
		$post_id = $_POST['post_id'];
		$result = mysqli_query($con, "SELECT * FROM posts WHERE id=$post_id");
		$row = mysqli_fetch_array($result);
		$n = $row['likes'];

		mysqli_query($con, "DELETE FROM likes WHERE post_id=$post_id AND user_id=$idd");
		mysqli_query($con, "UPDATE posts SET likes=$n-1 WHERE id=$post_id");
		
		echo $n-1;
		exit();
	}

    ?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
	<?php  while($row = mysqli_fetch_array($post )) : ?>
     <div class="content">
     	<div class="post">
		     <h4> POST </h4>
		     <p>
		     <?php echo $row['text'];?>
		     </p>
		     <br>
            <span class="likes_count"><?php echo $row['likes']; ?> likes</span>
             <?php

              $res= mysqli_query($con ,"SELECT * FROM likes WHERE user_id = $idd AND post_id= ". $row['id']."");
              if(mysqli_num_rows($res) == 1 ) :
             ?>
             <a href=""><img src="6.jpg" style="width: 5% ; display: block;" class="unlike" id="<?php echo $row['id'];  ?>"></a>
            <?php else : ?>
            	<a href=""><img src="7.jpg" style="width: 5% ; display: block;" class="like" id="<?php echo $row['id']; ?>" ></a>

            <?php endif ; ?>
           

		     
     	</div>
	 </div>
	<?php endwhile ;?>


	 <script type="text/javascript" src="jquery-1.11.3.min.js"></script>
	 <script type="text/javascript" src="sc.js"></script>
</body>
</html>