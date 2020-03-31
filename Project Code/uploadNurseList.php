<?php

include   'connection.php';
include   'Admin.php';


try
{
if (!$mysqlcon) 
{
	      	    	echo "connection failed";
                die("Connection failed: " . $mysqlcon->connect_error);
 } 

$mysqlcon = mysqli_connect($servername, $username, $password, $dbname) or die(mysql_error());

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$pass=$_POST['pass'];
$conpass=$_POST['conpass'];
$gender = $_POST['gender'];
$Add=$_POST["address"];
$mobile = $_POST["Mobile"];
$dob = $_POST["birth_date"];
$pin = $_POST["pincode"];
$email = $_POST["email"];

if($pass==$conpass)
{

    $qury = "INSERT INTO `nurselist` (nm,surnm,pass,address,gender,dob,pincode,mob,email) VALUES ('$fname','$lname','$pass','$Add','$gender','$dob','$pin','$mobile','$email')";
}
else
{

    echo '<script type="text/javascript">'; 
    echo 'alert("Check your Password again");'; 
    echo '</script>';
    exit();

}





if(mysqli_query($mysqlcon,$qury))
{
  echo '<script type="text/javascript">'; 
  echo 'alert("successful");'; 
  echo 'window.location.href = "http://localhost/final/Admin.php";';
  echo '</script>';

   
}
else
{
  echo '<script type="text/javascript">'; 
  echo 'alert("registration failed");'; 
  echo 'window.location.href = "http://localhost/final/Admin.php";';
  echo '</script>';
  
}

}

catch(Exception $e) 
{
  echo '<script type="text/javascript">'; 
  echo 'alert("registration failed");'; 
  echo 'window.location.href = "http://localhost/final/Admin.php";';
  echo '</script>';
  
  //echo 'Message: ' .$e->getMessage();
}
?>