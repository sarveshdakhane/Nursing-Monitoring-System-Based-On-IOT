<?php

include 'connection.php';
 $max;

if (!$mysqlcon) 
{
      echo "connection failed";
      die("Connection failed: " . $conn->connect_error);
} 
else
{
    $sql="SELECT MAX(id) AS MAX_id FROM DATA ";
    $result=mysqli_query($mysqlcon,$sql);
    if ($result->num_rows > 0) 
    {
    
        while($row = $result->fetch_assoc())
         {
            
            $id=$row["MAX_id"];
            $max=$id;
            echo $id;

        }
    } else 
    {
        echo "0 results";
    }
}




?>