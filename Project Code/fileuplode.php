<?php

include   'connection.php';
include   'registrationform.php';


$img = $_POST['image'];
$folderPath = "css\images\Patient_images\ ";
$image_parts = explode(";base64,", $img);
$image_type_aux = explode("image/", $image_parts[0]);
$image_type = $image_type_aux[1];
$image_base64 = base64_decode($image_parts[1]);
$fileName = uniqid(). '.png';
$file = $folderPath. $fileName;
file_put_contents($file, $image_base64);

try
{
if (!$mysqlcon) 
{
	      	    	echo "connection failed";
                die("Connection failed: " . $mysqlcon->connect_error);
 } 

$mysqlcon = mysqli_connect($servername, $username, $password, $dbname) or die(mysql_error());

$bname=$_POST['blood_group'];
$photo=$fileName;
$gender = $_POST['gender'];
$rid = $_POST['room'];
$eper=$_POST["Eperson"];
$ephn = $_POST["Ephone"];
$date = date("Y/m/d");

//INSERT INTO `patient_info`(`P_id`, `Room_id`,`R_time`) VALUES ('',5,CURRENT_DATE)

$qury = "INSERT INTO patient_info (Room_id,F_name,L_name,DOB,Gender,Email,Phone,B_group,Ssubject,Address,E_person,E_number,Image,height,weight,R_time) VALUES ('$rid','$_POST[first_name]','$_POST[last_name]','$_POST[birthday]','$gender','$_POST[email]','$_POST[phone]','$bname','$_POST[subject]','$_POST[address]','$eper','$ephn','$photo','$_POST[height]','$_POST[Weight]',CURRENT_DATE)";


$qury1 = "INSERT INTO patient_hist (Room_id,F_name,L_name,DOB,Gender,Email,Phone,B_group,Ssubject,Address,E_person,E_number,Image,height,weight,R_time) VALUES ('$rid','$_POST[first_name]','$_POST[last_name]','$_POST[birthday]','$gender','$_POST[email]','$_POST[phone]','$bname','$_POST[subject]','$_POST[address]','$eper','$ephn','$photo','$_POST[height]','$_POST[Weight]',CURRENT_DATE)";

$query2="UPDATE `room_info` SET r_status =1 , r_cline=1 WHERE Room_id = '$rid'";

$uqury = "UPDATE `room_info` SET `r_status`= 1 , `r_cline`=1 WHERE r_id=$rid";

if(mysqli_query($mysqlcon,$qury) && mysqli_query($mysqlcon,$qury1))
{
  echo '<script type="text/javascript">'; 
  echo 'alert("successful");'; 
  echo 'window.location.href = "index.php";';
  echo '</script>';

   
}
else
{
  echo '<script type="text/javascript">'; 
  echo 'alert("registration failed");'; 
  echo '</script>';
  
}

mysqli_query($mysqlcon,$uqury);

}

catch(Exception $e) 
{
  echo '<script type="text/javascript">'; 
  echo 'alert("registration failed");'; 
  echo '</script>';
  
  //echo 'Message: ' .$e->getMessage();
}
?>