<?php  include "db.php" ;?>
<?php  session_start() ;?>
<?php   


		$query = "SELECT * FROM `questions` " ;
		$rese = mysqli_query($con, $query) ;
		$total = $rese->num_rows;


		if(!isset($_SESSION['score'])){
			$_SESSION['score'] = 0 ; 
		}

		if($_POST){
			$num = $_POST['num'] ;
			$selected_choice = $_POST['choice'] ;
			$next = $num+1;


			$query = "SELECT * FROM `choices` WHERE qs_num = $num AND is_correct = 1 "  ;
			$res = mysqli_query($con, $query) ;

			$choice = mysqli_fetch_assoc($res);
			$correct = $choice['id']; 

			if($correct==$selected_choice){ $_SESSION['score']++ ; }
			if($num==$total){
				header("Location: final.php");
				exit() ;

			} else {header("Location: question.php?n=".$next);}

		


		}
