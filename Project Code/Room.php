<?php
     include 'connection.php';
    $rid=$_GET["rid"];
    $bits;
    $dist1;
    $dist2;
   
  

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
                $admindate=$row["R_time"];


            }
        } else 
        {
          echo '<script type="text/javascript">'; 
          echo 'alert("Room Is Empty !");'; 
          echo 'window.location.href = "index.php#room";';
          echo '</script>';
        }



?>



<!DOCTYPE html>
<html lang="en">

<head>


  <title>Room Detail</title>
  <link rel="icon" type="image/png" href="https://img.icons8.com/color/26/000000/hospital.png"/>
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <link rel="stylesheet" type="text/css" href="css/room.css">
  <script src="main.js"></script>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  <script src="js\rooms.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <link href="connection.php">

 

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">


  <script>

     function myfunction()
    {   
      
      var rid="<?php echo $rid;?>";
     // alert("in");
      
  if(rid==1)
  {
    $.get("get.php",function (data) 
      { 
      var bit=data.bits;
      var dist=100-parseInt((data.dist1)/18*100);
      document.getElementById('bits').innerHTML=bit;
      document.getElementById('level').innerHTML=dist+"%";
      var amount =data.dist1;
			var height =100-parseInt((amount)/18*100);
		  document.getElementById('data').innerHTML=height+"%";
      },"json"); 
  }

  else if(rid==3)
  {
    $.get("get.php",function (data) 
      { 
      var bit=0;
      var dist=100-parseInt((data.dist2)/18*100);
      document.getElementById('bits').innerHTML=bit;
      document.getElementById('level').innerHTML=dist+"%";
      var amount =data.dist2;
			var height=100-parseInt((amount)/18*100);
		  document.getElementById('data').innerHTML=height+"%";
      },"json"); 
  }
  else
  {
      document.getElementById('bits').innerHTML=0;
      document.getElementById('level').innerHTML=0;
  }
     
      
    
    }
    function alerts()
    {
              
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
            else{}
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
  
    setInterval(function(){myfunction()},50);
    setInterval(function(){alerts()},600);

  </script>
  <script>
    var rid='<?php echo $rid;?>';
    window.onload= function(){ 
      call(rid);
      myfunction();
      alerts();
   }
</script>

</head>

<body id="page-top">


  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php#room">
        <div class="sidebar-brand-icon rotate-n-15"></div>
        <img src="https://img.icons8.com/ultraviolet/26/000000/home.png">
        <div class="sidebar-brand-text mx-3">Home </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
       
      
       <img  class="nav-link" src="<?php echo $image ?>" > 


      </li>
      <hr class="sidebar-divider my-0">
      <br>
    <li>
          <div class="bio-data">
          <label>Name:</label>&nbsp&nbsp<label><?php echo "$firstname" ?></label><br>
          <label>Surname:</label>&nbsp&nbsp<label><?php echo "$lastname" ?></label><br>
          </div>



      </li>
      <li>
      <div class="bio-data">
          <label>Address:</label>&nbsp<label><?php echo "$Address" ?></label><br>
          <label>Mobile:</label><label><?php echo "$phne" ?></label>
        
          </div>

      </li>
      <li>
      <div class="bio-data">
          <label>Blood Group:</label>&nbsp&nbsp<label><?php echo "$blood" ?></label><br>
          <label>Height:</label>&nbsp&nbsp<label><?php echo "$height" ?></label><br>
              
      </li>
      <li>
      <div class="bio-data">
          <label>Weight:</label>&nbsp&nbsp<label><?php echo "$weight" ?></label><br>
         
          </div>
      </li>
      <br>
      <hr class="sidebar-divider my-0"><br>





      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->


    
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

         

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

           

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

           

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo "$firstname" ?>&nbsp<?php echo "$lastname" ?></span>
                <img class="img-profile rounded-circle" src="<?php echo $image ?>">
                 
              </a>
              <!-- Dropdown - User Information -->

            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            
           
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pluse Bits</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800" id="bits" ></div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Saline Level</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800" id="level"></div>
                      </div>
                    <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Admit Date</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $admindate ?></div>
                        </div>
                        <div class="col">
                         
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Pluse Bits</h6>
                 
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                  <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                 
             
                  </div>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Saline Level</h6>
                
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">


                     
                          <div class="tk" data-amount="30">
                          <div id="data"></div>
                          <div class="lq"></div>

                          </div> 
                      
                  
                  </div>
                  <div class="mt-4 text-center small">
                    <span class="mr-2">
                      <i class="fas fa-circle text-primary"></i> Water Level
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
           <!-- Footer -->
          </div>
        </div>
      </footer>
      <!-- End of Footer -->
        


    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
