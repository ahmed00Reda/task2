<?php  include "db.php" ;?>
<?php
session_start();
/** get total */
$query = "SELECT * FROM `questions` " ;
$rese = mysqli_query($con, $query) ;
$total = $rese->num_rows; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
    <title>quizz</title>
</head>
<body>
<header>
<div class="container">
<h1>php Quizz</h1>
</div>


</header>

<main>
<div class="container">
<h2>you're done !  </h2>
<p>congrats you have completed the quizz</p>
<p>your score is :<?php echo $_SESSION['score'];   ?></p>
<a href="question.php?n=1">retake Quizz</a>
<?php session_destroy(); ?>


</div>


</main>

<footer>
<div class="container">
copyright &copy; 2021 php Quizz by Ahmed Reda
</div>
</footer>


    
    
</body>
</html>