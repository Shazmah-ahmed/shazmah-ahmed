<?php

$fname= $_POST[`f_name`];
$lname= $_POST[`l_name`];
$phone= $_POST[`phone_no`];
$email= $_POST[`emil`];
$pass=  $_POST[`password`];
if (!empty($fname) || !empty($lname) || !empty($phone) || !empty($email) || !empty($pass))
{
    

        $servername="localhost";
        $username="root";
        $password="";
        $database="phone";
        $conn=mysqli_connect($servername,$username,$password,$database);
        if($conn)
     {
          echo"ok";
     }
         else
{
   die("connection failed due to".mysqli_connection_error());
}

}

?>








?>