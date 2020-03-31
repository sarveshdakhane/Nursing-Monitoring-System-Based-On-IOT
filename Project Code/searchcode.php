<html>
<head>
</head>
<body>
<h3>Staying Patients</h3>
<?php

include "connection.php";

if (isset($_POST['search'])) 
{

   $Name = $_POST['search'];

   $Query1="SELECT * FROM `patient_info` WHERE (`F_name` LIKE '%$Name%' ) OR (`L_name` LIKE '%$Name%') ";


   $ExecQuery1 = mysqli_query($mysqlcon,$Query1);


   while ($Result = MySQLi_fetch_array($ExecQuery1)) 
   {
       $rid=$Result['Room_id'];
       
   ?>

   <a onclick='fill("<?php echo $Result["F_name"] ; echo " "; echo $Result["L_name"];?>","<?php echo $rid ?>")'>
   <?php echo $Result['F_name']; echo " "; echo $Result["L_name"];?>
   </a> 
<?php 
}
} 
?>
 <hr>
<h4>All Patients</h4>
<?php

include "connection.php";

if (isset($_POST['search'])) 
{

   $Name = $_POST['search'];
   $Query2="SELECT * FROM  patient_hist WHERE (`F_name` LIKE '%$Name%' ) OR (`L_name` LIKE '%$Name%') ";
   $ExecQuery2 = mysqli_query($mysqlcon,$Query2);
while ($Result = MySQLi_fetch_array($ExecQuery2)) 
   {  
      $id=$Result['P_id'];
   ?>

   <a onclick='history("<?php echo $id ;?>")'>
   <?php echo $Result['F_name']; echo " "; echo $Result["L_name"];?>
   </a>
   
  
  
<?php 



}
} 
?>

   
</body>
</html>
