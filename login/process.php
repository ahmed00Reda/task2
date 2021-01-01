<?php 


		$name=$_POST['name'] ; 
		 
		$password=$_POST['password'] ; 
		
		
			
			// db connection_
		$con=mysqli_connect("localhost","root","","login") ;
		#mysql_select_db();
		
		$name = stripcslashes($name);
		$password= stripcslashes($password);
		$name = mysqli_real_escape_string($con,$name);
		$password = mysqli_real_escape_string($con,$password);
		
		
		
		$res = mysqli_query($con,"select * from users where name='$name' and password = '$password'") 
								or die("failed to query the db".mysql_error()) ;  
		$row = mysqli_fetch_array($res);
		if($row['name']==$name && $row['password']==$password){
			echo "login succsses  welcome ".$name ;
			
		} else{
			echo "failed to login sorry " ; 
		}