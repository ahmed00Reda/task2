<?php 


$connection = mysqli_connect("localhost","root", "","note");
function open_connection()
{
    $connection = mysqli_connect("localhost","root", "","note");

    if (mysqli_connect_errno()) {
       $errorMessage = "Database connection failed : " . mysqli_connect_error() . " and mysql error number : " . mysqli_connect_errno(); 
        echo  $errorMessage;
    }
    return $connection;
}



    $query= "select * from note" ;
    $result= mysqli_query($connection,$query) ;