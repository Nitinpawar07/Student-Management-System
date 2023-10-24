<?php
global $db ;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 

$db_name = 'sims';
$db_user = 'root';
$db_pass = 'Nitin@2000';
$db_host = 'localhost';


$db = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
else
{
 echo "connected !!!";
}
*/




/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$db_name = 'project';
$db_user = 'root';
$db_pass = 'Nitin@2000';
$db_host = 'localhost';


$db = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
else
{
 echo "connected  !!!";
}
?>
?>