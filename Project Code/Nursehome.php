<?php
include "connection.php";


    $id = $_POST['id'];
    $pass = $_POST['pass'];
   
    $sql = "SELECT * FROM `nurselist` WHERE email = '$id' AND pass='$pass'";
    $result = $mysqlcon->query($sql);
   

    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
         $firstname=$row["nm"];
         $lastname=$row["surnm"];
         //echo $firstname;
         //echo $lastname;
        }
    }
    else
    {
        echo '<script type="text/javascript">'; 
        echo 'alert("Id or Password was Wrong failed");'; 
        echo 'window.location.href = "Nurse.php";';
        echo '</script>';
          
           
    }
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nurse Home Page</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/styles.css">
    
    <style>
       .body
       {
        background-image: url("images/form-img.jpg");
       }
       .container 
       {
           margin-top:-14px;
          
           

       }
    </style>
</head>
<body>
<div class="page">
    <div class="main">
        
        <div class="header">
        <a href="Nurse.php" style="color:white;">Log Out</a>
        </div>
        <div class="container">
        
            <form id="booking-form" class="booking-form" method="POST" action="Changestatus.php">
            <input type="hidden"   name="id" value="<?php echo $id?>">
            <input type="hidden"   name="pass" value="<?php echo $pass ?>">
                <div class="form-group">
                   
                    <div class="form-date-from form-icon">
                        <label for="date_from">Patient Availabe</label>
                        <select name="avl_status"  
                             style=" border: none;
                            background: #fff;
                            border-radius: 5px;
                            -moz-border-radius: 5px;
                            -webkit-border-radius: 5px;
                            -o-border-radius: 5px;
                            -ms-border-radius: 5px;
                            box-sizing: border-box;
                            width: 100%;
                            padding: 13px 20px;
                            font-size: 16px;
                            font-weight: 600;
                            color: #222;
                            display: block;
                            font-family: Poppins;
                            position: relative;
                            z-index: 9; }
                            input::-webkit-input-placeholder {
                                color: #999; }
                            input::-moz-placeholder {
                                color: #999; }
                            input:-ms-input-placeholder {
                                color: #999; }
                            input:-moz-placeholder {
                                color: #999;
                                ">
                        <option value="1">TRUE</option>
                        <option value="0">FALSE</option>
                        </select>
                    </div>

                    <div class="form-date-to form-icon">
                        <label for="date_to">Clean</label>
                        <select name="cln_status"  
                             style=" border: none;
                            background: #fff;
                            border-radius: 5px;
                            -moz-border-radius: 5px;
                            -webkit-border-radius: 5px;
                            -o-border-radius: 5px;
                            -ms-border-radius: 5px;
                            box-sizing: border-box;
                            width: 100%;
                            padding: 13px 20px;
                            font-size: 16px;
                            font-weight: 600;
                            color: #222;
                            display: block;
                            font-family: Poppins;
                            position: relative;
                            z-index: 9; }
                            input::-webkit-input-placeholder {
                                color: #999; }
                            input::-moz-placeholder {
                                color: #999; }
                            input:-ms-input-placeholder {
                                color: #999; }
                            input:-moz-placeholder {
                                color: #999;
                                ">
                        <option value="1">TRUE</option>
                        <option value="0">FALSE</option>
                        </select>
                    </div>
                    <div class="form-quantity">
                        <label for="quantity">Select Room</label>
                        <select name="rooms"  
                             style=" border: none;
                            background: #fff;
                            border-radius: 5px;
                            -moz-border-radius: 5px;
                            -webkit-border-radius: 5px;
                            -o-border-radius: 5px;
                            -ms-border-radius: 5px;
                            box-sizing: border-box;
                            width: 100%;
                            padding: 13px 20px;
                            font-size: 16px;
                            font-weight: 600;
                            color: #222;
                            display: block;
                            font-family: Poppins;
                            position: relative;
                            z-index: 9; }
                            input::-webkit-input-placeholder {
                                color: #999; }
                            input::-moz-placeholder {
                                color: #999; }
                            input:-ms-input-placeholder {
                                color: #999; }
                            input:-moz-placeholder {
                                color: #999;
                                ">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                       
                        </select>
                    </div>
                    <div class="form-submit">
                        <input type="submit" id="submit" class="submit" value="Update" />
                    </div>
                </div>
            </form>
            <hr>
            <form id="booking-form" class="booking-form" method="POST" action="deletepatient.php">
            <input type="hidden"   name="id" value="<?php echo $id?>">
            <input type="hidden"   name="pass" value="<?php echo $pass ?>">
            <P style="color:Red"> Instruction:</p>
            <ul>
        <li>
        <P>After Patient exit first clean the room then click button</p></li>
        </ul>
                <div class="form-group">
        
                   <div class="form-date-from form-icon">
                       <label for="quantity">Patient Room Number</label>
                       <select name="delpatient"  
                            style=" border: none;
                           background: #fff;
                           border-radius: 5px;
                           -moz-border-radius: 5px;
                           -webkit-border-radius: 5px;
                           -o-border-radius: 5px;
                           -ms-border-radius: 5px;
                           box-sizing: border-box;
                           width: 100%;
                           padding: 13px 20px;
                           font-size: 16px;
                           font-weight: 600;
                           color: #222;
                           display: block;
                           font-family: Poppins;
                           position: relative;
                           z-index: 9; }
                           input::-webkit-input-placeholder {
                               color: #999; }
                           input::-moz-placeholder {
                               color: #999; }
                           input:-ms-input-placeholder {
                               color: #999; }
                           input:-moz-placeholder {
                               color: #999;
                               ">
                       <option value="1">1</option>
                       <option value="2">2</option>
                       <option value="3">3</option>
                       <option value="4">4</option>
                       <option value="5">5</option>
                       <option value="6">6</option>
                       <option value="7">7</option>
                       <option value="8">8</option>
                       <option value="9">9</option>
                      
                       </select>
                   </div>
                   <div class="form-submit">
                       <input type="submit" id="submit" class="submit" value="Remove Patient" />
                   </div>
               </div>
            </form>
        </div>
        

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery-ui/jquery-ui.min.js"></script>
    <script src="js/main4.js"></script>

                           </diV>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>