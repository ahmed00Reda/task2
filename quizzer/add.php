<?php  include "db.php" ;?>
<?php 

 
if(isset($_POST['submit']) && !empty($_POST['submit'])){
$qs_num=$_POST['qs_num'] ;
$qs_text=$_POST['qs_text'] ;

$choices =  array() ;
$choices[1]=$_POST['choice1'] ;
$choices[2]=$_POST['choice2'] ;
$choices[3]=$_POST['choice3'] ;
$choices[4]=$_POST['choice4'] ; 
$correct = $_POST['correct_choice'];

//query 

$query = "INSERT INTO `questions`(qs_id, qs) VALUES ('$qs_num','$qs_text')" ;
$row = mysqli_query($con, $query) ;

if($row){
    foreach ($choices as $choice => $value) {
        if($value != ''){
        if($correct == $choice){
            $is_correct = 1 ;
        }
        else{ $is_correct=0;}

         $query= "INSERT INTO `choices`( qs_num, is_correct, text) VALUES ('$qs_num','$is_correct','$value')" ;
        $row = mysqli_query($con, $query) ;
        if($row){continue;} else{die($con->errorno."and".$con->error);}
       
    }

}





}
$msg = " Question succesfully added " ;


}


// total 
$query = "SELECT * FROM `questions` " ;
		$rese = mysqli_query($con, $query) ;
		$total = $rese->num_rows;
        $next = $total+1 ;

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
   <?php if(isset($msg)){ echo "<h2>".$msg."</h2>" ;} ?>
<h2>add A Question</h2>
<form action="add.php" method="post">
<label for="">Question number </label>
<input type="number" value="<?php echo $next ; ?>" name="qs_num" id=""> <br> <br>
<label for="">Question text : </label>
<input type="text" name="qs_text" id="">
<br> <br>
<label for=""> choice 1 ;</label>
<input type="text" name="choice1" id="">
<br><br>
<label for=""> choice 2 :</label>
<input type="text" name="choice2" id="">
<br><br>
<label for=""> choice 3 :</label>
<input type="text" name="choice3" id="">
<br><br>
<label for=""> choice 4 :</label>
<input type="text" name="choice4" id="">
<br><br>
<label for="">correct choice : </label>
<input type="number" name="correct_choice" id=""> <br><br>

<input type="submit" name="submit" value="add">



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