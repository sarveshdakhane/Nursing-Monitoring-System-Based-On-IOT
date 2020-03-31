<?php
include "connection.php";

$id = $_POST['id'];
$pass = $_POST['pass'];

$rid = $_POST['rooms'];
$avl = $_POST['avl_status'];
$cln = $_POST['cln_status'];


$sql="UPDATE `room_info` SET r_status='$avl' , r_cline='$cln' WHERE r_id='$rid'";





if ($mysqlcon->query($sql) === TRUE) 
{
  

} 

$mysqlcon->close();



?>

<html>
         
<script >
  
          function submitform()
         {
           document.forms["myForm"].submit();
           alert(" updated successfully");
         }


</script>
<body  onload="submitform()">
<form action="http://localhost/final/Nursehome.php" method="POST" id="myForm">
   <input type="hidden"   name="id" value="<?php echo $id ?>">
   <input type="hidden"   name="pass"  value="<?php echo $pass?>">
</form>

   
</body>
</html>

    
