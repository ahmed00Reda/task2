<?php  include"db.php";  
open_connection();
 ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
    <title>login page</title>
</head>
<body>
	<?php  ?>
				
		<div id="container">
			<h1> Note Box  </h1>
			<div class="list">
				<ul>
				<?php while($row = mysqli_fetch_assoc($result)) :?>
					<li><span><?php echo $row['time']."-"; ?></span><b><?php echo $row['user']?></b>:<?php echo $row['message'] ; ?></li>
				<?php endwhile ; ?>

	


				</ul>

			</div>




			<div class ="form">
				<?php if (isset($_GET['error'])) :?>
					<div class="erorr"> <strong><?php echo $_GET['error']; ?></strong></div>
				<?php endif ; ?>	
				<form action="process.php" method="post">
				    
				    <input type="text" name="name" id="name" placeholder="enter your name"> 
				    <input type="text" name="message" id="pass" placeholder="enter your messge"><br>
				   
				    <div class="btn">
				    <input type="submit" name="submit" value="add">
				    </div>



				</form>


			</div>

		</div>
    
</body>
</html>
				