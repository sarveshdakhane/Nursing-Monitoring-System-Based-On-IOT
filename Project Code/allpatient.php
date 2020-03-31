<?php

include 'connection.php';
$id=$_GET["id"];

    $sql = "SELECT * FROM `patient_hist` WHERE P_id='$id'";
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
            $rid=$row["Room_id"];
            $admindate=$row["R_time"];
            $dd=$row["dish_date"];


        }
    } else {
        echo "0 results";
    }

?>


<html >
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>Bio Data</title>
    <link rel="icon" type="image/png" href="https://img.icons8.com/color/26/000000/hospital.png"/>
    <link type="text/css" rel="stylesheet" href="css/blue.css" />
    <link type="text/css" rel="stylesheet" href="css/print.css" media="print"/>
    <script type="text/javascript" src="js/cufon.yui.js"></script>
    <script type="text/javascript" src="js/myriad.js"></script>
    
    <script type="text/javascript">
            Cufon.replace('h1,h2');
    </script>
    </head>
    <body>
     <form action="index.php">
          <button style="float:left;width:7% ;height:6%" type="submit" >Home</button>
             </form>

    <!-- Begin Wrapper -->
    <div id="wrapper">
      <div class="wrapper-top"></div>
      <div class="wrapper-mid">
        <!-- Begin Paper -->
        <div id="paper">
          <div class="paper-top"></div>
          <div id="paper-mid">
            <div class="entry">
              <!-- Begin Image -->
              <img class="portrait" src="<?php echo $image ?>"  />
              <!-- End Image -->
              <!-- Begin Personal Information -->
              <div class="self">
                <h1 class="name"><?php echo $firstname; echo " "; echo $lastname ?>  <br />
                  <span>Patient</span></h1>
                <ul>
                  <li class="ad"><?php echo $Address ?> </li>
                  <li class="mail"><?php echo $Email ?> </li>
                  <li class="tel"><?php echo $phne ?> </li>
                </ul>
              </div>
              <!-- End Personal Information -->
              <!-- Begin Social -->
              <div class="social">
                <ul>
                  <li><a class='north' href="javascript:window.print()" title="Print"><img src="css/images/icn-print.jpg" alt="" /></a></li>
                </ul>
              </div>
              <!-- End Social -->
            </div>
            <!-- Begin 1st Row -->
            <div class="entry">
              <h2>OBJECTIVE</h2>
              <p><?php echo $sub ?> </p>
            </div>
            <!-- End 1st Row -->
            <!-- Begin 2nd Row -->
            <div class="entry">
              <h2>PERSONAL DATA</h2>
                
              <div class="content">
                <h3>Birth Date</h3>
                <p><?php echo $dob?></p>
              </div>
               
              <div class="content">
                <h3>Blood Group</h3>
                <p><?php echo $blood ?> </p>
              </div>
              
              <div class="content">
                <h3>Height</h3>
                <p><?php echo $height ?> </p>
              </div>
              <div class="content">
                <h3>Weight</h3>
                <p><?php echo $weight ?> </p>
              </div>
            </div>
            <!-- End 2nd Row -->
            <!-- Begin 3rd Row -->
            
            <div class="entry">
            
              <h2>AT EEMERGENCY </h2>
              <div class="content">
                <h3>Person Name</h3>
                <p><?php echo $Eper ?>  <br />
        
              </div>
              
              <div class="content">
                <h3>Person Number</h3>
                <p><?php echo $Enum ?> <br />
            
              </div>
            </div>
            
            
            <!-- End 3rd Row -->
            <!-- Begin 4th Row -->
            <div class="entry">
              <h2>At Hosptial</h2>
              <div class="content">
              
                <h3>Allocated Room Number</h3>
                <ul class="skills">
                  <li><?php echo $rid ?> </li>
                  </ul>

                  
                <h3>Admit Date</h3>
                <ul class="skills">
                  <li><?php echo $admindate ?> </li>
                  </ul>
                  
                  
                <h3>Disharge Date</h3>
                <ul class="skills">
                  <li><?php echo $dd ?> </li>
                  </ul> 
                  
              </div>
            
            </div>
            <!-- End 4th Row -->
             <!-- Begin 5th Row -->
           
            <!-- Begin 5th Row -->
          </div>
          <div class="clear"></div>
          <div class="paper-bottom"></div>
        </div>
        <!-- End Paper -->
      </div>
      <div class="wrapper-bottom"></div>
    </div>
    <div id="message"><a href="#top" id="top-link">Go to Top</a></div>
    <!-- End Wrapper -->
    </body>
    </html>
    