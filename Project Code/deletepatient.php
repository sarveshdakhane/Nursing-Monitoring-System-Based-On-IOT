<?php 
 include "connection.php";
 
 
$id = $_POST['id'];
$pass = $_POST['pass'];
$rid = $_POST['delpatient'];

try
{
    $sql="DELETE FROM `patient_info` WHERE Room_id='$rid'";
    $sql1= "UPDATE `patient_hist` SET dish_date =CURRENT_DATE WHERE Room_id = '$rid'";
    $sql3 = "UPDATE `room_info` SET `r_status`= 0 , `r_cline`=1 WHERE r_id=$rid";
   
    $mysqlcon->query($sql) ; 
    $mysqlcon->query($sql1) ; 
    $mysqlcon->query($sql3) ; 
}
catch(Exception $e)
{
  echo '<script type="text/javascript">'; 
  echo 'alert("update failed");'; 
  echo 'window.location.href = "Nurse.php";';
  echo '</script>';
}


$mysqlcon->close();



?>

<html>
         
<script >
  
          function submitform()
         {
           document.forms["myForm"].submit();
           alert(" patient Remove Successfully");
         }


</script>
<body  onload="submitform()">
<form action="Nursehome.php" method="POST" id="myForm">
   <input type="hidden"   name="id" value="<?php echo $id ?>">
   <input type="hidden"   name="pass"  value="<?php echo $pass?>">
</form>

   
</body>
</html>

    
