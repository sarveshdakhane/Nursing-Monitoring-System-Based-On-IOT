<?php

$response1 =  file_get_contents("http://blynk-cloud.com/2d2360d905824b928b03e5ebfa3bed5b/get/V7");
$response2 =  file_get_contents("http://blynk-cloud.com/2d2360d905824b928b03e5ebfa3bed5b/get/V5");
$response3 =  file_get_contents("http://blynk-cloud.com/2d2360d905824b928b03e5ebfa3bed5b/get/V6");

$bits=preg_replace('#[^0-9\.]#','',$response1);
$dist1=preg_replace('#[^0-9\.]#','',$response2);
$dist2=preg_replace('#[^0-9\.]#','',$response3);

$rid1=1;
$rid2=3;

if($bits>160)
{ $bits=160;
}
else{}
if($dist1>18)
{
  $dist1=18;
}
else{}
if( $dist2>18)
{
  $dist2=18;
}else{}
 
$output=json_encode(array("bits"=>$bits,"dist1"=>$dist1,"dist2"=>$dist2,"rid1"=>$rid1,"rid2"=>$rid2));
echo $output;

?>