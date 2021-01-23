<?php 



$con = new mysqli("localhost","root","","quizz");


if($con->connect_error){

printf("failed to connect %s \n",$con->connect_error);
exit;


}