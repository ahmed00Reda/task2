<?php  include "db.php" ;?>
<?php
session_start(); 
$num = (int)$_GET['n']  ;
/** get question */
$query = "SELECT * FROM `questions` WHERE qs_id = $num" ;
$res = mysqli_query($con, $query) ;
$qs = mysqli_fetch_assoc($res);
/** get chocies */
$query = "SELECT * FROM `choices` WHERE qs_num = $num" ;
$res = mysqli_query($con, $query) ;
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
<h3 class = "current"> question <?php echo $num."of ".$total ; ?>  </h3>
<p class="question"><?php echo $qs['qs'] ;  ?> </p>
<form action="process.php" method="post">
 <ul>
     <?php while($choices = mysqli_fetch_assoc($res)) : ?>
<li> <input type="radio" name="choice" value="<?php echo $choices['id'] ?>"> <?php echo $choices['text'] ?> </li>


        <?php endwhile ; ?>
 </ul>
 <input type="submit" value="submit">
 <input type="hidden" name="num" value="<?php echo $num ?>">




</form>



</div>


</main>

<footer>
<div class="container">
copyright &copy; 2021 php Quizz by Ahmed Reda
</div>
</footer>


    
    
</body>
</html>