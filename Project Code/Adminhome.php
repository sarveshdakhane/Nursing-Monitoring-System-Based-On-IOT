<?php


$id = $_POST['id'];
$pass = $_POST['pass'];

if($id=="admin" && $pass="admin")
{
    echo '<script type="text/javascript">'; 
    echo 'alert("Login Succefull");'; 
    echo '</script>';
      
}
else
{
    
    echo '<script type="text/javascript">'; 
    echo 'alert("Id or Password was Wrong failed");'; 
    echo 'window.location.href = "Admin.php";';
    echo '</script>';
      
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Page</title>
    <link rel="icon" type="image/png" href="https://img.icons8.com/color/26/000000/hospital.png"/>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        #h1 
        {
            width:100%;
            text-align: center;
        }
        .tabel_body 
        {
            width:100%;
            height:100%;
        }
       .table
       {
           border:2px solid black;
           width:100%;
           
       }
      
       .table th
       {
           border-bottom:2px solid black;
       }
       .table td 
       {
          border-right: 2px solid black; 
          border-left: 2px solid black;
          border-bottom:2px solid black;
       }
       .table input 
       {
           border:none;
           background-color:white;
           cursor: pointer;
       }
  </style>
  <script>
$('button').click(function() {

$.ajax({
 type: "POST",
 url: "some.php",
 data: { name: "John" }
}).done(function( msg ) {
 alert( "Data Saved: " + msg );
});    

   });

      
 </script>
</head>
<body>

    <div class="main">
    <a href="Admin.php" style="color:white;font-size:17px;">Log Out</a>
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <div class="table_body">
                        <h1 id="h1">All Nures In Hospital</h1>
                    <?php
                    include 'connection.php';
                    global $id;
                    $sqlget="SELECT * FROM nurselist";
                    $sqldata=mysqli_query($mysqlcon,$sqlget);

                    echo "<form method='post'>";


                    echo"<table class='table'>";
echo"<tr><th> Id</th><th> Name </th><th>Surname</th><th>Date OF Birth</th><th>Mobile</th><th>Address</th><th>Email</th></tr>";
                    while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
                    { 
                    
                        
                        echo "<tr><td>";
                        //echo "<input type='submit' name='test' value='delete' />";
                        echo $row['id'];
                        echo "</td><td>";
                        echo $row['nm'];
                        echo "</td><td>";
                        echo $row['surnm'];
                        echo "</td><td>";
                        echo $row['dob'];
                        echo "</td><td>";
                        echo $row['mob'];
                        echo "</td><td>";
                        echo $row['address'];
                        echo "</td><td>";
                        echo $row['email'];
                        echo "</td></tr>";
                    }
                    echo"</table>";
                    echo"</form>";

                    function testfun()
                    {

                         
                         include 'connection.php';
                         echo "Your test function on button click is working";
                         




                    }
                    
                    if(array_key_exists('test',$_POST))
                    {
                        
                        testfun();
                    }
                    


                    ?>
                    </div>

                    

                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form" action="uploadNurseList.php">
                        <h2>Nurse registration form</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Name :</label>
                                <input type="text" name="fname" id="name" required/>
                            </div>
                            <div class="form-group">
                                <label for="father_name"> Surname :</label>
                                <input type="text" name="lname" id="father_name" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Password :</label>
                            <input type="text" name="pass" id="address" required/>
                        </div>
                        <div class="form-group">
                            <label for="address">Conform Password :</label>
                            <input type="text" name="conpass" id="address" required/>
                        </div>
                        <div class="form-group">
                            <label for="address">Address :</label>
                            <input type="text" name="address" id="address" required/>
                        </div>
                        <div class="form-radio">
                            <label for="gender" class="radio-label">Gender :</label>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" value="male" id="male" checked>
                                <label for="male">Male</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="gender"value="Female" id="female">
                                <label for="female">Female</label>
                                <span class="check"></span>
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label for="birth_date">DOB :</label>
                            <input type="text" name="birth_date" id="birth_date" placeholder="yyyy/mm/dd">
                        </div>
                        <div class="form-group">
                            <label for="pincode">Pincode :</label>
                            <input type="text" name="pincode" id="pincode">
                        </div>
                        <div class="form-group">
                                <label for="pincode">Mobile No:</label>
                                <input type="text" name="Mobile" id="pincode">
                            </div>
                      
                        <div class="form-group">
                            <label for="email">Email ID :</label>
                            <input type="email" name="email" id="email" />
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main2.js"></script>
</body>
</html>