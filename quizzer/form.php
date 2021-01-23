<?php  include "db.php" ;?>
<?php   $query = "SELECT * FROM `questions` " ;
$rese = mysqli_query($con, $query) ;
$total = $rese->num_rows;
 ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<header>
<div class="container">
<h1>php Quizz</h1>
</div>


</header>

<main>
<div class="container">
<h2>test your knowldge of php </h2>
<p>this is multiable choices quizz </p>
<ul>
<li><strong>number of qustions : </strong><?php  echo $total ?></li>
<li><strong>diffuclty</strong> easy </li>
<li><strong>time is :</strong><?php  echo $total*.5 ?>minutes</li>

</ul>
<a href="question.php?n=1" > Start Quizz</a>



</div>


</main>

<footer>
<div class="container">
copyright &copy; 2021 php Quizz by Ahmed Reda
</div>
</footer>


    
    
</body>
</html>