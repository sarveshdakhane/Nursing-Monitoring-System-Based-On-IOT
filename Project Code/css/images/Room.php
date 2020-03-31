<?php

    $rid=$_GET["rid"];
  
    
    include 'connection.php';

// Check connection


        $sql = "SELECT * FROM `patient_info` WHERE Room_id='$rid'";
        $result = $mysqlcon->query($sql);

        if ($result->num_rows > 0) 
        {
        
            while($row = $result->fetch_assoc())
             {
                $firstname=$row["F_name"];
                $lastname=$row["L_name"];
                $image= "css\images\Patient_images\ ".$row["Image"];
                $Address=$row["Address"];
                $phne=$row["Phone"];
                $dob=$row["DOB"];
                $gender=$row["Gender"];
                $Email=$row["Email"];
                $blood =$row["B_group"];
                $sub=$row["Ssubject"];
                $Eper=$row["E_person"];
                $Enum=$row["E_number"];
                $height=$row["height"];
                $weight=$row["weight"];


            }
        } else {
            echo "0 results";
        }



?>
<!DOCTYPE html>

<html>
<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Room Detail</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" type="text/css" href="css/rooms.css">
    <script src="main.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="js\room.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link href="connection.php">

   

</head>
<body onload="call()">

    <div class="left_side">

             <form action="index.php">
                <input class="back_button" type="submit" value="Back"/>
             </form>
             <br><br>

             <div class="profile">
        

        <div class="photo"> <img src="<?php echo $image ?>" > </div>
        <br><br><br>

         <div class="bio_data">
         <br><br>
             <table>
                 <tr>
                     <td><label>Name:</label></td>
                     <td><input type="text" value="<?php echo "$firstname" ?>"></td>
                     <td><label>Surname:</label></td>
                     <td><input type="text" value="<?php echo "$lastname" ?>"></td>
                 </tr>
                 <tr>
                     <td><label>Address:</label></td>
                     <td><input type="text" value="<?php echo "$Address" ?>"></td>
                     <td><label>Mobile:</label></td>
                     <td><input type="text" value="<?php echo "$phne" ?>"></td>
                 </tr>
                 <tr>
                 <td><label>Blood Group:</label></td>
                 <td><input type="text" value="<?php echo "$blood" ?>"></td>
                 <td><label>Height:</label></td>
                 <td><input type="text" value="<?php echo "$height" ?>"></td>
                 </tr>
                 <tr>
                 <td><label>Weight:</label></td>
                 <td><input type="text" value="<?php echo "$weight" ?>"></td>
                 </tr>
             </table>
         </div>
        </div>

    </div>
    <br>

    <div class="upper_right_side">
    
    <div id="chartContainer" style="height:280px; width: 1000px;"></div>

    </div>
<hr>
    <div class="lower_right_side_1">  
        <div class="postion" >
        <div class="tk" data-amount="90">
          20%
        <div class="lq"></div>
        </div> 
    </div>
   </div>
   <div class="lower_right_side_2">

   </div>
    
   

      

</body>
</html>