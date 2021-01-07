<?php 
  include"db.php";  
open_connection();



		$name=$_POST['name'] ; 
		$message=$_POST['message'] ; 
		
		if (isset($_POST['submit'])) {
			$user = mysqli_real_escape_string($connection,$name);
			$msg = mysqli_real_escape_string($connection,$message);
		
			$time= date('h:i:s a',time());
			if (!isset($name) || $name == "" || !isset($msg) || $msg == "") {
			$error = "please fill ur name and message";
			header("Location: index.php?error=".urlencode($error)) ;
					exit();

				}
		else  {
				$query = "INSERT INTO `note`( `user`, `message`, `time`) VALUES ('$user','$msg','$time')";
				if (!mysqli_query($connection,$query)) {
					die("failed to INSERT ".mysqli_error($connection));
				} else {
					header("Location: index.php") ;
					exit();
				}
				
			}
		}
		
		