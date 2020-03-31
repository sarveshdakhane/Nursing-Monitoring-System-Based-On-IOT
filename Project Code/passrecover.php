<?php
include "connection.php";


$id = $_POST['id'];
$dob = $_POST['dob'];

$sql = "SELECT * FROM `nurselist` WHERE email = '$id' AND dob='$dob'";
$result = $mysqlcon->query($sql);


if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
     $pass=$row["pass"];
   
    }
}
else
{
    echo '<script type="text/javascript">'; 
    echo 'alert("Id or birth not match check again ");'; 
    echo 'window.location.href = "forgetpass.php";';
    echo '</script>';
      
       
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Change Password</title>
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="https://img.icons8.com/color/26/000000/hospital.png"/>
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/mainlogin.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				
					<span class="txt1 p-b-11">
					your Email-id
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="text" name="id" autocomplete="off" value="<?php echo $id ?>">
						<span class="focus-input100"></span>
                    </div>
                    <span class="txt1 p-b-11">
                         your Birth Date
                       </span>
                       <div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
                           <input class="input100" type="text" name="dob" autocomplete="off" value="<?php echo $dob?>">
                           <span class="focus-input100"></span>
                       </div>
					
				
                       <span class="txt1 p-b-11">Your Password is</span>
                       <div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
                    <input class="input100" type="text" name="password"  value="<?php echo $pass ?>">
                           <span class="focus-input100"></span>
                       </div>
                       
					<div class="container-login100-form-btn">
                    <form action="Nurse.php">
				   <input type="submit" value="Login Again" class="login100-form-btn" />
                     </form>
						
					</div>
			
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>