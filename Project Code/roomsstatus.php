<?php

include 'connection.php';

class rooms
{


                function room1()
                {

                  include 'connection.php';
                  $rid1=1;
                  global $clean1;
                  global $avl1;
                  global $nm1;
                  global $snm1;
                  global $add1;
                  global $num1;
                  


                            if (!$mysqlcon) 
                            {
                                echo "connection failed";
                                die("Connection failed: " . $conn->connect_error);
                            } 
                            else
                            {
                                $sql="SELECT * FROM `room_info` WHERE R_ID='$rid1' ";
                                $result=mysqli_query($mysqlcon,$sql);

                                    if(mysqli_num_rows($result)>0)
                                    {
                                                while($row=mysqli_fetch_assoc($result))
                                                {
                                                    $clean1=$row["r_cline"];
                                                    $avl1=$row["r_status"];

                                                if($clean1 == 0 && $avl1== 0)
                                                {
                                                    $clean1="false";
                                                    $avl1="false";
                                                }
                                                elseif($clean1 == 1 && $avl1== 0)
                                                {
                                                    $clean1="true";
                                                    $avl1="false";
                                                }
                                                elseif($clean1 == 0 && $avl1== 1)
                                                {
                                                   
                                                    $clean1="false";
                                                    $avl1="true";
                                                }
                                                else
                                                {
                                                    $clean1="true";
                                                    $avl1="true";
                                                }
                                                
                                                }
                                    }
                                    else
                                    {
                                        echo "0 result";
                                    }
                            }



                            if(!$mysqlcon)
                            {
                                echo "connection failed";
                                die("Connection failed: " . $conn->connect_error);
                            }
                            else
                            {
                                $sqlq="SELECT * FROM `patient_info` WHERE Room_id='$rid1' ";
                                $result2=mysqli_query($mysqlcon,$sqlq);

                                    if(mysqli_num_rows($result2)>0)
                                    { 
                                        while($row=mysqli_fetch_assoc($result2))
                                        {
                                        $nm1=$row["F_name"];
                                        $snm1=$row["L_name"];
                                        $num1=$row["Phone"];
                                        $add1=$row["Address"];
                                        }

                                    }
                                    else
                                    {
                                       
                                    }

                            }





                    }
        
        function room2()
        {
            
            include 'connection.php';
            $rid2=2;
            global $clean2;
            global $avl2;
            global $nm2;
            global $snm2;
            global $add2;
            global $num2;
            


                      if (!$mysqlcon) 
                      {
                          echo "connection failed";
                          die("Connection failed: " . $conn->connect_error);
                      } 
                      else
                      {
                          $sql="SELECT * FROM `room_info` WHERE R_ID='$rid2' ";
                          $result=mysqli_query($mysqlcon,$sql);

                              if(mysqli_num_rows($result)>0)
                              {
                                          while($row=mysqli_fetch_assoc($result))
                                          {
                                              $clean2=$row["r_cline"];
                                              $avl2=$row["r_status"];

                                          if($clean2 == 0 && $avl2== 0)
                                          {
                                              $clean2="false";
                                              $avl2="false";
                                          }
                                          elseif($clean2 == 1 && $avl2== 0)
                                          {
                                              $clean2="true";
                                              $avl2="false";
                                          }
                                          elseif($clean2 == 0 && $avl2== 1)
                                          {
                                             
                                              $clean2="false";
                                              $avl2="true";
                                          }
                                          else
                                          {  
                                             

                                              $clean2="true";
                                              $avl2="true";
                                          }
                                          
                                          }
                              }
                              else
                              {
                                  echo "0 result";
                              }
                      }
                      
                      if(!$mysqlcon)
                      {
                          echo "connection failed";
                          die("Connection failed: " . $conn->connect_error);
                      }
                      else
                      {
                          $sqlq="SELECT * FROM `patient_info` WHERE Room_id='$rid2' ";
                          $result2=mysqli_query($mysqlcon,$sqlq);

                              if(mysqli_num_rows($result2)>0)
                              { 
                                  while($row=mysqli_fetch_assoc($result2))
                                  {
                                  $nm2=$row["F_name"];
                                  $snm2=$row["L_name"];
                                  $num2=$row["Phone"];
                                  $add2=$row["Address"];
                                  }

                              }
                              else
                              {
                                  
                              }

                      }

        }


        function room3()
        {
            
            include 'connection.php';
            $rid3=3;
            global $clean3;
            global $avl3;
            global $nm3;
            global $snm3;
            global $add3;
            global $num3;
            


                      if (!$mysqlcon) 
                      {
                          echo "connection failed";
                          die("Connection failed: " . $conn->connect_error);
                      } 
                      else
                      {
                          $sql="SELECT * FROM `room_info` WHERE R_ID='$rid3' ";
                          $result=mysqli_query($mysqlcon,$sql);

                              if(mysqli_num_rows($result)>0)
                              {
                                          while($row=mysqli_fetch_assoc($result))
                                          {
                                              $clean3=$row["r_cline"];
                                              $avl3=$row["r_status"];

                                          if($clean3 == 0 && $avl3== 0)
                                          {
                                              $clean3="false";
                                              $avl3="false";
                                          }
                                          elseif($clean3 == 1 && $avl3== 0)
                                          {
                                              $clean3="true";
                                              $avl3="false";
                                          }
                                          elseif($clean3 == 0 && $avl3== 1)
                                          {
                                              
                                              $clean3="false";
                                              $avl3="true";
                                          }
                                          else
                                          {
                                              $clean3="true";
                                              $avl3="true";
                                          }
                                          
                                          }
                              }
                              else
                              {
                                  echo "0 result";
                              }
                      }
                      if(!$mysqlcon)
                      {
                          echo "connection failed";
                          die("Connection failed: " . $conn->connect_error);
                      }
                      else
                      {
                          $sqlq="SELECT * FROM `patient_info` WHERE Room_id='$rid3' ";
                          $result2=mysqli_query($mysqlcon,$sqlq);

                              if(mysqli_num_rows($result2)>0)
                              { 
                                  while($row=mysqli_fetch_assoc($result2))
                                  {
                                  $nm3=$row["F_name"];
                                  $snm3=$row["L_name"];
                                  $num3=$row["Phone"];
                                  $add3=$row["Address"];
                                  }

                              }
                              else
                              {
                                 
                              }

                      }





        }

        function room4()
        {
            
            include 'connection.php';
            $rid4=4;
            global $clean4;
            global $avl4;
            global $nm4;
            global $snm4;
            global $add4;
            global $num4;
            


                      if (!$mysqlcon) 
                      {
                          echo "connection failed";
                          die("Connection failed: " . $conn->connect_error);
                      } 
                      else
                      {
                          $sql="SELECT * FROM `room_info` WHERE R_ID='$rid4' ";
                          $result=mysqli_query($mysqlcon,$sql);

                              if(mysqli_num_rows($result)>0)
                              {
                                          while($row=mysqli_fetch_assoc($result))
                                          {
                                              $clean4=$row["r_cline"];
                                              $avl4=$row["r_status"];

                                          if($clean4 == 0 && $avl4== 0)
                                          {
                                              $clean4="false";
                                              $avl4="false";
                                          }
                                          elseif($clean4 == 1 && $avl4== 0)
                                          {
                                              $clean4="true";
                                              $avl4="false";
                                          }
                                          elseif($clean4 == 0 && $avl4== 1)
                                          {
                                              
                                              $clean4="false";
                                              $avl4="true";
                                          }
                                          else
                                          {
                                              $clean4="true";
                                              $avl4="true";
                                          }
                                          
                                          }
                              }
                              else
                              {
                                  echo "0 result";
                              }
                      }

                      if(!$mysqlcon)
                      {
                          echo "connection failed";
                          die("Connection failed: " . $conn->connect_error);
                      }
                      else
                      {
                          $sqlq="SELECT * FROM `patient_info` WHERE Room_id='$rid4' ";
                          $result2=mysqli_query($mysqlcon,$sqlq);

                              if(mysqli_num_rows($result2)>0)
                              { 
                                  while($row=mysqli_fetch_assoc($result2))
                                  {
                                  $nm4=$row["F_name"];
                                  $snm4=$row["L_name"];
                                  $num4=$row["Phone"];
                                  $add4=$row["Address"];
                                  }

                              }
                              else
                              {
                                  
                              }

                      }



        }

        function room5()
        {
            
            include 'connection.php';
            $rid5=5;
            global $clean5;
            global $avl5;
            global $nm5;
            global $snm5;
            global $add5;
            global $num5;
            
            


                      if (!$mysqlcon) 
                      {
                          echo "connection failed";
                          die("Connection failed: " . $conn->connect_error);
                      } 
                      else
                      {
                          $sql="SELECT * FROM `room_info` WHERE R_ID='$rid5' ";
                          $result=mysqli_query($mysqlcon,$sql);

                              if(mysqli_num_rows($result)>0)
                              {
                                          while($row=mysqli_fetch_assoc($result))
                                          {
                                              $clean5=$row["r_cline"];
                                              $avl5=$row["r_status"];

                                          if($clean5 == 0 && $avl5== 0)
                                          {
                                              $clean5="false";
                                              $avl5="false";
                                          }
                                          elseif($clean5 == 1 && $avl5== 0)
                                          {
                                              $clean5="true";
                                              $avl5="false";
                                          }
                                          elseif($clean5 == 0 && $avl5== 1)
                                          {
                                              
                                              $clean5="false";
                                              $avl5="true";
                                          }
                                          else
                                          {
                                              $clean5="true";
                                              $avl5="true";
                                          }
                                          
                                          }
                              }
                              else
                              {
                                  echo "0 result";
                              }
                      }
                      if(!$mysqlcon)
                      {
                          echo "connection failed";
                          die("Connection failed: " . $conn->connect_error);
                      }
                      else
                      {
                          $sqlq="SELECT * FROM `patient_info` WHERE Room_id='$rid5' ";
                          $result2=mysqli_query($mysqlcon,$sqlq);

                              if(mysqli_num_rows($result2)>0)
                              { 
                                  while($row=mysqli_fetch_assoc($result2))
                                  {
                                  $nm5=$row["F_name"];
                                  $snm5=$row["L_name"];
                                  $num5=$row["Phone"];
                                  $add5=$row["Address"];
                                  }

                              }
                              else
                              {
                                  
                              }

                      }

        }

        function room6()
        {
            
            include 'connection.php';
            $rid6=6;
            global $clean6;
            global $avl6;
            global $nm6;
            global $snm6;
            global $add6;
            global $num6;
            


                      if (!$mysqlcon) 
                      {
                          echo "connection failed";
                          die("Connection failed: " . $conn->connect_error);
                      } 
                      else
                      {
                          $sql="SELECT * FROM `room_info` WHERE R_ID='$rid6' ";
                          $result=mysqli_query($mysqlcon,$sql);

                              if(mysqli_num_rows($result)>0)
                              {
                                          while($row=mysqli_fetch_assoc($result))
                                          {
                                              $clean6=$row["r_cline"];
                                              $avl6=$row["r_status"];

                                          if($clean6 == 0 && $avl6== 0)
                                          {
                                              $clean6="false";
                                              $avl6="false";
                                          }
                                          elseif($clean6 == 1 && $avl6== 0)
                                          {
                                              $clean6="true";
                                              $avl6="false";
                                          }
                                          elseif($clean6 == 0 && $avl6== 1)
                                          {
                                              
                                              $clean6="false";
                                              $avl6="true";
                                          }
                                          else
                                          {
                                              $clean6="true";
                                              $avl6="true";
                                          }
                                          
                                          }
                              }
                              else
                              {
                                  echo "0 result";
                              }
                      }
                      if(!$mysqlcon)
                      {
                          echo "connection failed";
                          die("Connection failed: " . $conn->connect_error);
                      }
                      else
                      {
                          $sqlq="SELECT * FROM `patient_info` WHERE Room_id='$rid6' ";
                          $result2=mysqli_query($mysqlcon,$sqlq);

                              if(mysqli_num_rows($result2)>0)
                              { 
                                  while($row=mysqli_fetch_assoc($result2))
                                  {
                                  $nm6=$row["F_name"];
                                  $snm6=$row["L_name"];
                                  $num6=$row["Phone"];
                                  $add6=$row["Address"];
                                  }

                              }
                              else
                              {
                                  
                              }

                      }

        }

        function room7()
        {
          
            include 'connection.php';
            $rid7=7;
            global $clean7;
            global $avl7;
            global $nm7;
            global $snm7;
            global $add7;
            global $num7;
            


                      if (!$mysqlcon) 
                      {
                          echo "connection failed";
                          die("Connection failed: " . $conn->connect_error);
                      } 
                      else
                      {
                          $sql="SELECT * FROM `room_info` WHERE R_ID='$rid7' ";
                          $result=mysqli_query($mysqlcon,$sql);

                              if(mysqli_num_rows($result)>0)
                              {
                                          while($row=mysqli_fetch_assoc($result))
                                          {
                                              $clean7=$row["r_cline"];
                                              $avl7=$row["r_status"];

                                          if($clean7 == 0 && $avl7== 0)
                                          {
                                              $clean7="false";
                                              $avl7="false";
                                          }
                                          elseif($clean7 == 1 && $avl7== 0)
                                          {
                                              $clean7="true";
                                              $avl7="false";
                                          }
                                          elseif($clean7 == 0 && $avl7== 1)
                                          {
                                             
                                              $clean7="false";
                                              $avl7="true";
                                          }
                                          else
                                          {
                                              $clean7="true";
                                              $avl7="true";
                                          }
                                          
                                          }
                              }
                              else
                              {
                                  echo "0 result";
                              }
                      }
                      if(!$mysqlcon)
                      {
                          echo "connection failed";
                          die("Connection failed: " . $conn->connect_error);
                      }
                      else
                      {
                          $sqlq="SELECT * FROM `patient_info` WHERE Room_id='$rid7' ";
                          $result2=mysqli_query($mysqlcon,$sqlq);

                              if(mysqli_num_rows($result2)>0)
                              { 
                                  while($row=mysqli_fetch_assoc($result2))
                                  {
                                  $nm7=$row["F_name"];
                                  $snm7=$row["L_name"];
                                  $num7=$row["Phone"];
                                  $add7=$row["Address"];
                                  }

                              }
                              else
                              {
                                  
                              }

                      }

        }

        function room8()
        {
            
            include 'connection.php';
            $rid8=8;
            global $clean8;
            global $avl8;
            global $nm8;
            global $snm8;
            global $add8;
            global $num8;
            
            


                      if (!$mysqlcon) 
                      {
                          echo "connection failed";
                          die("Connection failed: " . $conn->connect_error);
                      } 
                      else
                      {
                          $sql="SELECT * FROM `room_info` WHERE R_ID='$rid8' ";
                          $result=mysqli_query($mysqlcon,$sql);

                              if(mysqli_num_rows($result)>0)
                              {
                                          while($row=mysqli_fetch_assoc($result))
                                          {
                                              $clean8=$row["r_cline"];
                                              $avl8=$row["r_status"];

                                          if($clean8 == 0 && $avl8== 0)
                                          {
                                              $clean8="false";
                                              $avl8="false";
                                          }
                                          elseif($clean8 == 1 && $avl8== 0)
                                          {
                                              $clean8="true";
                                              $avl8="false";
                                          }
                                          elseif($clean8 == 0 && $avl8== 1)
                                          {
                                              
                                              $clean8="false";
                                              $avl8="true";
                                          }
                                          else
                                          {
                                              $clean8="true";
                                              $avl8="true";
                                          }
                                          
                                          }
                              }
                              else
                              {
                                  echo "0 result";
                              }
                      }
                      if(!$mysqlcon)
                      {
                          echo "connection failed";
                          die("Connection failed: " . $conn->connect_error);
                      }
                      else
                      {
                          $sqlq="SELECT * FROM `patient_info` WHERE Room_id='$rid8' ";
                          $result2=mysqli_query($mysqlcon,$sqlq);

                              if(mysqli_num_rows($result2)>0)
                              { 
                                  while($row=mysqli_fetch_assoc($result2))
                                  {
                                  $nm8=$row["F_name"];
                                  $snm8=$row["L_name"];
                                  $num8=$row["Phone"];
                                  $add8=$row["Address"];
                                  }

                              }
                              else
                              {
                                  
                              }

                      }

        }

        function room9()
        {
            
            include 'connection.php';
            $rid9=9;
            global $clean9;
            global $avl9;
            global $nm9;
            global $snm9;
            global $add9;
            global $num9;
            
            


                      if (!$mysqlcon) 
                      {
                          echo "connection failed";
                          die("Connection failed: " . $conn->connect_error);
                      } 
                      else
                      {
                          $sql="SELECT * FROM `room_info` WHERE R_ID='$rid9' ";
                          $result=mysqli_query($mysqlcon,$sql);

                              if(mysqli_num_rows($result)>0)
                              {
                                          while($row=mysqli_fetch_assoc($result))
                                          {
                                              $clean9=$row["r_cline"];
                                              $avl9=$row["r_status"];

                                          if($clean9 == 0 && $avl9== 0)
                                          {
                                              $clean9="false";
                                              $avl9="false";
                                          }
                                          elseif($clean9 == 1 && $avl9== 0)
                                          {
                                              $clean9="true";
                                              $avl9="false";
                                          }
                                          elseif($clean9 == 0 && $avl9== 1)
                                          {
                                              
                                              $clean9="false";
                                              $avl9="true";
                                          }
                                          else
                                          {
                                              $clean9="true";
                                              $avl9="true";
                                          }
                                          
                                          }
                              }
                              else
                              {
                                  echo "0 result";
                              }
                      }
                      if(!$mysqlcon)
        {
            echo "connection failed";
            die("Connection failed: " . $conn->connect_error);
        }
        else
        {
            $sqlq="SELECT * FROM `patient_info` WHERE Room_id='$rid9' ";
            $result2=mysqli_query($mysqlcon,$sqlq);

                if(mysqli_num_rows($result2)>0)
                { 
                    while($row=mysqli_fetch_assoc($result2))
                    {
                    $nm9=$row["F_name"];
                    $snm9=$row["L_name"];
                    $num9=$row["Phone"];
                    $add9=$row["Address"];
                    }

                }
                else
                {
                    
                }

        }

        }

        


}

$obj=new rooms;
$obj->room1();
$obj->room2();
$obj->room3();
$obj->room4();
$obj->room5();
$obj->room6();
$obj->room7();
$obj->room8();
$obj->room9();

?>