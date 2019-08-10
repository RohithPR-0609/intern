<?php
session_start();

$server = 'localhost';
$username = 'root';
$pass = '';
$db = 'intern_project';


$mysqli = new mysqli($server, $username, $pass, $db) or die ("Failed to connect");

if(isset($_POST['login']))
{
$username = trim($_POST['email']);
$password = trim($_POST['password']);
$query = "SELECT email, password FROM user_reg WHERE email='$username' 
AND password='$password'";

$result = mysqli_query($mysqli,$query)or die(mysqli_error($query));
$num_row = mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
if( $num_row ==1 )
     {
 $_SESSION['user_id']=$row['user_id'];
 header("Location: header.html");
 Print '<script>alert("valid user");</script>'; 
 exit;
  }
  else
     {
 echo 'oops  can not do it';
  Print '<script>alert("invalid user");</script>';
  }
 }
?>
