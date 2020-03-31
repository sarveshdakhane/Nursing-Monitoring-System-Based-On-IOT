<?php 
  include 'connection.php';


  if (!$mysqlcon) 
  {
      echo "connection failed";
      die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT r_id FROM `room_info` WHERE r_status='0' AND r_cline='1'";
  $result = mysqli_query($mysqlcon, $sql);

  if (mysqli_num_rows($result) > 0) 
  {
    
  } 
  else 
  {
    echo '<script type="text/javascript">'; 
    echo 'alert("sorry!!! No rooms are available now");';
    echo 'window.location.href = "http://localhost/final/index.php";';
    echo '</script>';
   
    
   
  }
?>                      




<html>
<head>
  <!-- Required meta tags-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Colorlib Templates">
  <meta name="author" content="Colorlib">
  <meta name="keywords" content="Colorlib Templates">

  <!-- Title Page-->
  <title>patient Register Forms</title>
  <link rel="icon" type="image/png" href="https://img.icons8.com/color/26/000000/hospital.png"/>

  <!-- Icons font CSS-->
  <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
  <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  <!-- Font special for pages-->
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Vendor CSS-->
  <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
  <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

  <!-- Main CSS-->
  <link href="css/main.css" rel="stylesheet" media="all">
  <link rel="stylesheet" type="text/css" href="css/camera.css"> 

     
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
       
       <script>
           function clean()
           {
            window.location.href = "registrationform.php";  
           }


            </script>

</head>
<body>

<div width="50%" height="50%" id="register">
<form action="index.php">
          <button style="float:left;width:7% ;height:6%" type="submit" id="button">Back</button>
             </form>

  <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
    <div class="wrapper wrapper--w680">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">Registration Form</h2>
                <form method="POST" action="fileuplode.php" enctype="multipart/form-data">
                  <div class="input-group">
                      
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                            <div class="data">
                                   
                                   <input  type="button" value="Clear" onClick="clean()">
                                   <input  type="button" value="Click " onClick="take_snapshot()">
                                   <input type="hidden" name="image" class="image-tag">
                                    <div id="my_camera"></div>
                                    </div>
                                       
                                    
                                                            
                                   
                                        
          <!-- Configure a few settings and attach camera -->
          <script language="JavaScript">
                  Webcam.set({
                      width: 450,
                      height: 420,
                      image_format: 'jpeg',
                      jpeg_quality: 90
                  });
                
                  Webcam.attach( '#my_camera' );
                
                  function take_snapshot() 
                  {
                      Webcam.snap( function(data_uri) 
                      {
                       $(".image-tag").val(data_uri);
                       document.getElementById('my_camera').innerHTML = '<img src="'+data_uri+'"/>';
                      } );
                  }
                  
                
              </script>



</div></div></div>


                       <label class="label">Room number</label>

                        <div class="rs-select2 js-select-simple select--no-search">

                          <select name="room" class="input--style-4">
                            
                            <?php 
                            include 'connection.php';

                            if (!$mysqlcon) {
                              echo "connection failed";
                                die("Connection failed: " . $conn->connect_error);
                            } 
                            $sql = "SELECT r_id FROM `room_info` WHERE r_status='0' AND r_cline='1'";
                            $result = mysqli_query($mysqlcon, $sql);

                            if (mysqli_num_rows($result) > 0) {
                              
                                // output data of each row
                                while($row = mysqli_fetch_assoc($result)) {
                                  echo "<option value='". $row['r_id'] ."'>" .$row['r_id'] ."</option>" ;
                                }
                            } else {
                              
                                echo "0 results";

                            }
                            ?>                            
                          </select>

                        </div>

                      
                    </div>


                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">first name</label>
                                <input class="input--style-4" type="text" name="first_name"required>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">last name</label>
                                <input class="input--style-4" id="n2" type="text" name="last_name" required>
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Birthday</label>
                                <div class="input-group-icon">
                                    <input class="input--style-4 js-datepicker" type="text" name="birthday" placeholder="yyyy-mm-dd" required>
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Gender</label>
                                <div class="p-t-10">
                                    <label class="radio-container m-r-45">Male
                                        <input type="radio" checked="checked" name="gender" value="Male">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-container">Female
                                        <input type="radio" id="g2" name="gender" value="Female">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Height</label>
                                <input class="input--style-4" type="text" name="height" placeholder="in cm" required>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Weight</label>
                                <input class="input--style-4" placeholder="in kg" type="text" name="Weight" required>
                            </div>
                        </div>
                    </div>


                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Email</label>
                                <input class="input--style-4" type="email" name="email">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Phone Number</label>
                                <input class="input--style-4" type="text" name="phone" required pattern="[7-9]{1}[0-9]{9}" placeholder="">
                            </div>
                        </div>
                    </div>

                    <div class="input-group">
                        <label class="label">Blood Group</label>

                        <div class="rs-select2 js-select-simple select--no-search">
                          <select name="blood_group" class="input--style-4" id="bg" >
                              <option value="A+">A+</option>
                              <option value="A-">A-</option>
                              <option value="B+">B+</option>
                              <option value="B-">B-</option>
                              <option value="O+">O+</option>
                              <option value="O-">O-</option>
                              <option value="AB+">AB+</option>
                              <option value="AB-">AB-</option>
                          </select>
                            
                        </div>

                    </div>

                    <div class="input-group">
                        <label class="label">Subject</label>
                        <div class="rs-select2 js-select-simple select--no-search">
                           <input class="input--style-4" type="text" name="subject" required>
                            
                        </div>
                    </div>

                    <div class="input-group">
                        <label class="label">Address</label>
                        <div class="rs-select2 js-select-simple select--no-search">
                           <input class="input--style-4" type="text" name="address" required>
                            
                        </div>
                    </div>

                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Emergency Person Name</label>
                                <input class="input--style-4" type="text" name="Eperson" required>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Emergency Phone Number</label>
                                <input class="input--style-4" type="text" name="Ephone" required pattern="[7-9]{1}[0-9]{9}">
                            </div>
                        </div>
                    </div> 
                    <div class="p-t-15">
                        <button class="btn btn--radius-2 btn--blue" type="submit" name="submit">Submit</button>
                    </div>
                </form>
<script type="text/javascript">
  function mss()
  {
    alert ("saved");
  }
</script>
            </div>
        </div>
    </div>
</div>
</div>

</body>
</html>