<?php

include 'connection.php';

$rid=1;

if (!$mysqlcon) 
{
      echo "connection failed";
      die("Connection failed: " . $conn->connect_error);
} 
else
{
    $sql="SELECT dist ,bits, MAX(id) AS MAX_id FROM DATA WHERE r_id='$rid' ";
    $result=mysqli_query($mysqlcon,$sql);

        if(mysqli_num_rows($result)>0)
        {
                    while($row=mysqli_fetch_assoc($result))
                    {
                        $maxid=$row["MAX_id"];
                        $dist=$row["dist"];
                        $bits=$row["bits"];
                       
                    }
        }
        else
        {
        
        }
}

$output=json_encode( array("id"=>$maxid,"dist"=>$dist ,"bits"=>$bits));

echo $output;

?>
