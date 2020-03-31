<?php 
include 'roomsstatus.php';
include 'connection.php';

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
         }
    } 
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>

<title>Monitoring System</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" >
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<script src="js/main.js"></script>

<style>
body,h1,h2,h3,h4,h5 
{font-family: "Raleway", sans-serif}


.w3-third img
{margin-bottom: -6px; opacity: 0.8; cursor: pointer}

.w3-third img:hover{opacity: 1}
</style>




  <!-- Required meta tags-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Colorlib Templates">
  <meta name="author" content="Colorlib">
  <meta name="keywords" content="Colorlib Templates">

  <!-- Title Page-->
  
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


  <!---search bar files ---->
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800" rel="stylesheet" />
    <script type="text/javascript" src="js/search.js"></script>
    <link rel="stylesheet" type="text/css" href="css/search.css">
 
</head>

<body class="w3-light-grey w3-content" style="max-width:1600px" onload="myfunction()">

<!-- Sidebar/menu -->

<nav class="w3-sidebar w3-bar-block w3-white w3-animate-left w3-text-grey w3-collapse w3-top w3-center"      style="z-index:3;width:300px;font-weight:bold" id="mySidebar"><br>

 <!---logo-->
 <div class="logo"></div>
  
  <h3 class="w3-padding-64 w3-center"><b>Monitoring</b></h3>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-padding
  w3-hide-large">CLOSE</a>

  <a href="#home" onclick="w3_close()" class="w3-bar-item w3-button">HOME</a>

  <a href="#room" onclick="w3_close()" class="w3-bar-item w3-button" >ROOMS</a>
  <a href="registrationform.php" onclick="w3_close()" class="w3-bar-item w3-button">REGISTERATION FORM</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT US</a> 
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
  <a href="Admin.php" onclick="w3_close()" class="w3-bar-item w3-button">ADMIN PAGE</a> 
  <a href="Nurse.php" onclick="w3_close()" class="w3-bar-item w3-button">NURSE PAGE</a>


</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-white w3-xlarge w3-padding-16">
  <span class="w3-left w3-padding">N-M SYSTEM </span>
  <a href="javascript:void(0)" class="w3-right w3-button w3-white" onclick="w3_open()">☰</a>
</header>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>





<!-- !PAGE CONTENT! -->

<div class="w3-main" style="margin-left:300px">

    
  <!-- Push down content on small screens --> 
  <div class="w3-hide-large" style="margin-top:83px"> </div>





 


<!--Home contents-->  
<div class="w3-container" id="home">
    
      
      <div class="s006">
      <form>
        <fieldset>
          <legend>Search Patients </legend>
          <div class="inner-form">
            <div class="input-field">
              <input id="search" type="text" placeholder="Search" autocomplete="off"/>
            </div>
          </div>
          <div class="suggestion-wrap" id="display"> </div>
        </fieldset>
      </form>
    </div>

    

  
  </div>

<!-- Photo grid -->
    <div  class="room" id="room">
     <h1></h1> 
     <br>
   
  <div class="w3-row" >
        <div class="w3-third">
    
          
            <div class="rooms" id="1" onclick="location.href='Room.php?rid=1';">
    
             <h1>1</h1>
             <div class="data">
     <label>Name :</label> &emsp;&emsp;<input type="text" value="<?php echo $nm1;echo "  "?><?php echo $snm1 ?>">
             <label>Address:</label>&emsp;&nbsp;&nbsp;<input  type="text" value="<?php echo $add1 ?>">
             <label>Mobile No:</label>&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $num1 ?>">
             </div>
    
             <div class="room_condition">
    
                 <div id="avalibilty1"></div>
                 <div id="clean1"></div>
                 
    
    
             </div>
    
          
          </div>
          
          <br>
          <div class="rooms" onclick="location.href='Room.php?rid=4';"><h1>4</h1>
            <div class="data">
            <label>Name :</label> &emsp;&emsp;<input type="text" value="<?php echo $nm4;echo "  "?><?php echo $snm4 ?>">
             <label>Address:</label>&emsp;&nbsp;&nbsp;<input  type="text" value="<?php echo $add4 ?>">
             <label>Mobile No:</label>&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $num4 ?>">
                    
                    </div>
           
                    <div class="room_condition">
                        
                            <div id="avalibilty4"></div>
                            <div id="clean4"></div>
                            
                        
           
           
                    </div></div><br>
    
          <div class="rooms" onclick="location.href='Room.php?rid=7';"><h1>7</h1>
            <div class="data">
            <label>Name :</label> &emsp;&emsp;<input type="text" value="<?php echo $nm7;echo "  "?><?php echo $snm7 ?>">
             <label>Address:</label>&emsp;&nbsp;&nbsp;<input  type="text" value="<?php echo $add7 ?>">
             <label>Mobile No:</label>&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $num7 ?>">
                    
                    </div>
           
                    <div class="room_condition">
                        
                            <div id="avalibilty7"></div>
                            <div id="clean7"></div>
                            
           
           
                    </div></div>
         
          
        
        </div>
      
    
        <div class="w3-third">
    
            <div class="rooms" onclick="location.href='Room.php?rid=2';"> <h1>2</h1>  
                <div class="data">
                <label>Name :</label> &emsp;&emsp;<input type="text" value="<?php echo $nm2;echo "  "?><?php echo $snm2 ?>">
             <label>Address:</label>&emsp;&nbsp;&nbsp;<input  type="text" value="<?php echo $add2 ?>">
             <label>Mobile No:</label>&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $num2 ?>">
                        
                        </div>
               
                        <div class="room_condition">
                            
                                <div id="avalibilty2"></div>
                                <div id="clean2"></div>
                                
                            
               
               
                        </div></div>  
                        <br>
            <div class="rooms" onclick="location.href='Room.php?rid=5';">   <h1>5</h1>
                <div class="data">
                <label>Name :</label> &emsp;&emsp;<input type="text" value="<?php echo $nm5;echo "  "?><?php echo $snm5 ?>">
             <label>Address:</label>&emsp;&nbsp;&nbsp;<input  type="text" value="<?php echo $add5 ?>">
             <label>Mobile No:</label>&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $num5 ?>">
                        
                        </div>
               
                        <div class="room_condition">
                                <div id="avalibilty5"></div>
                                <div id="clean5"></div>
                            
               
               
                        </div></div>  <br>
            <div class="rooms" onclick="location.href='Room.php?rid=8';">   <h1>8</h1>
                <div class="data">
                <label>Name :</label> &emsp;&emsp;<input type="text" value="<?php echo $nm8;echo "  "?><?php echo $snm8 ?>">
             <label>Address:</label>&emsp;&nbsp;&nbsp;<input  type="text" value="<?php echo $add8 ?>">
             <label>Mobile No:</label>&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $num8 ?>">
                        
                        </div>
               
                        <div class="room_condition">
                            
                                <div id="avalibilty8"></div>
                                <div id="clean8"></div>
                            
               
               
                        </div>
            </div>
           
         
        </div>
        
        <div class="w3-third">
            <div class="rooms" onclick="location.href='Room.php?rid=3';"><h1>3</h1>
                <div class="data">
                <label>Name :</label> &emsp;&emsp;<input type="text" value="<?php echo $nm3;echo "  "?><?php echo $snm3 ?>">
             <label>Address:</label>&emsp;&nbsp;&nbsp;<input  type="text" value="<?php echo $add3 ?>">
             <label>Mobile No:</label>&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $num3 ?>">
                        
                        </div>
               
                        <div class="room_condition">
                            
                                <div id="avalibilty3"></div>
                                <div id="clean3"></div>
               
               
                        </div></div>  
                        <br>
            <div class="rooms" onclick="location.href='Room.php?rid=6';">
                <h1>6</h1>
                <div class="data">
                <label>Name :</label> &emsp;&emsp;<input type="text" value="<?php echo $nm6;echo "  "?><?php echo $snm6 ?>">
             <label>Address:</label>&emsp;&nbsp;&nbsp;<input  type="text" value="<?php echo $add6 ?>">
             <label>Mobile No:</label>&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $num6 ?>">
                        
                        </div>
               
                        <div class="room_condition">
                            
                                <div id="avalibilty6"></div>
                                <div id="clean6"></div>
               
               
                        </div></div>  
                        <br>
            <div class="rooms" onclick="location.href='Room.php?rid=9';"><h1>9</h1>
            
                <div class="data">
                <label>Name :</label> &emsp;&emsp;<input type="text" value="<?php echo $nm9;echo "  "?><?php echo $snm9 ?>">
             <label>Address:</label>&emsp;&nbsp;&nbsp;<input  type="text" value="<?php echo $add9 ?>">
             <label>Mobile No:</label>&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $num9 ?>">
                        </div>
               
                        <div class="room_condition">
                            
                                <div id="avalibilty9">A</div>
                                <div id="clean9">C</div>
                            
               
               
                        </div></div>
         
        </div>
        </div>
        </div>

        <!-- Room Numbers -->
         <div class="w3-center w3-padding-32">
         <div class="w3-bar">
          <a href="#room" class="w3-bar-item w3-button w3-hover-black">«</a>
          <a href="#room" class="w3-bar-item w3-black w3-button">1</a>
          <a href="#room" class="w3-bar-item w3-button w3-hover-black">2</a>
          <a href="#room" class="w3-bar-item w3-button w3-hover-black">3</a>
          <a href="#room" class="w3-bar-item w3-button w3-hover-black">4</a>
          <a href="#room" class="w3-bar-item w3-button w3-hover-black">»</a>
        </div>
         </div>
      
  
  <!-- About section -->
  <div class="w3-container w3-dark-grey w3-center w3-text-light-grey w3-padding-32" id="about">
    <h4><b>About Us</b></h4>
    <img src="css/images/webimages/aboutus.jpg" alt="Me" class="w3-image w3-padding-32" width="600" height="650">
    <div class="w3-content w3-justify" style="max-width:600px">
      <h4>NURSING MONITORING SYSTEM – BASED ON IOT</h4>
      <br>
      <p>We help the hospitals for better patients care, fast treatment and their personal data managements using our design system (NMS).we design system which indicate and alert the nurses about patient pulse and their saline level. So that nurse or other hospital facilities will take quick action. We also provided the managements of rooms like room’s cleanness and room’s availability etc.
       For achieving this we use IOT technology and use the different sensors.

      </p>
      <br>
      <p>mail :sarvesh.dakhane@hotmail.com</p>
      <p>Mob No:7020717651</p>
      <hr class="w3-opacity">
     
    </div>
  </div>

  <!-- Contact section -->
  <div class="w3-container w3-light-grey w3-padding-32 w3-padding-large" id="contact">
    <div class="w3-content" style="max-width:600px">
      <h4 class="w3-center"><b>Contacts</b></h4>
      <p>Sarvesh Dakhane (+91) -7020717651</P>  
      <P>Rohit Khandare(+91) -8855886478</P>
      <P> Dhawal Vikhe (+91) -7709766577</P>
      <P> Roshan Padhmane(+91) -9403055835</p>
      
    </div>
  </div>

  
  
  <div class="w3-black w3-center w3-padding-24">Powered by @Sarvesh&Team</div>

<!-- End page content -->
</div>
<script>
var maxid="<?php echo $id ?>";
function run()
 {
 $.get("dataextraction.php",function (data) 
 {
  if(data.id >maxid)
  {
    alert("data upadated");
    maxid=data.id;
  }
  else
  {
    //alert("not upadated");
  }
  },"json"); 

  $.get("get.php",function (data)
  {
    var level1=parseInt((data.dist1)/18*100);
    var level2=parseInt((data.dist2)/18*100);
    if(data.bits<45 || data.bits>156)
    {
     // alert("Please check the ROOM(1) patient quick ");
      if (window.confirm('Please check the ROOM(1) patient quick '))
          {
               window.location.href = "Room.php?rid=1";
          }
          else
          {
              // They clicked no
          }
    }
    if(level1>90)
    {
     // alert("Check the Saline level in ROOM(1)");
        if (window.confirm('Check the Saline level in ROOM(1)'))
          {
               window.location.href = "Room.php?rid=1";
          }
          else
          {
              // They clicked no
          }
    }
    else{}
    if(level2>90)
    {
      // alert("Check the Saline level in ROOM(2) ");
      if (window.confirm('Check the Saline level in ROOM(3)'))
          {
               window.location.href = "Room.php?rid=3";
          }
          else
          {
              // They clicked no
          }
    }
    else{}
  
  },"json"); 


}
   
function myfunction()
    {
      //run();
     
    // var cln1="true";
    // var avl1="false";

    var cln1= "<?php echo $clean1 ?>";
    var avl1= "<?php echo $avl1   ?>" ;
     
    
     var cln2="<?php echo $clean2 ?>";
     var avl2="<?php echo $avl2   ?>" ;
    
     var cln3="<?php echo $clean3 ?>";
     var avl3="<?php echo $avl3   ?>" ;
    
     var cln4="<?php echo $clean4 ?>";
     var avl4="<?php echo $avl4   ?>" ;
    
     var cln5="<?php echo $clean5 ?>";
     var avl5="<?php echo $avl5   ?>" ;
    
     var cln6="<?php echo $clean6 ?>";
     var avl6="<?php echo $avl6   ?>" ;
    
     var cln7="<?php echo $clean7 ?>";
     var avl7="<?php echo $avl7   ?>" ;
    
     var cln8="<?php echo $clean8 ?>";
     var avl8="<?php echo $avl8   ?>" ;
    
     var cln9="<?php echo $clean9 ?>";
     var avl9="<?php echo $avl9   ?>" ;
    
    
     room_info(cln1,avl1,1);
     room_info(cln2,avl2,2);
     room_info(cln3,avl3,3);
     room_info(cln4,avl4,4);
     room_info(cln5,avl5,5);
     room_info(cln6,avl6,6);
     room_info(cln7,avl7,7);
     room_info(cln8,avl8,8);
     room_info(cln9,avl9,9);
    
    setInterval(function () { run() }, 3000);
     
    
     


    
    }
    </script>
    

</body>
</html>
