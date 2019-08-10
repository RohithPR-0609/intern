<?php

if(isset($_POST['login']))
{
$user_name = $_POST['email'];
$user_pass = $_POST['password'];
if(!$user_name || !$user_pass)
{
echo 'You have not entered all the required details.'.'Please try again.';
exit;

}
$host = "localhost";
$user = "root";
$pass = "";
$db = "intern_project";


$link = new mysqli($host, $user, $pass, $db);
if($link->connect_errno > 0)
{
die('Unable to connect to database [' . $link->connect_error. ']');
}
else{
	echo " ";
	}

$query = "SELECT * FROM user_reg WHERE email = '$user_name'";

$result = $link->query($query);

if(!$result = $link->query($query))
{
die('There was an error running the query [' . $link->error. ']');
}

else{
	echo " ";
	}

$row = $result->fetch_assoc();


$query1 = "SELECT name, password FROM admin_login WHERE name = '$user_name'";

$result1 = $link->query($query1);

if(!$result1 = $link->query($query1))
{
die('There was an error running the query [' . $link->error. ']');
}

else{
	echo " ";
	}

$row1 = $result1->fetch_assoc();


if($row['email']=="$user_name" && $row['password']=="$user_pass")
{
       session_start();
       while($row){
       	$name =$row['user_name'];
       	$_SESSION['login_name']=$name;
       		$id =$row['user_id'];
       	$_SESSION['login_id']=$id;

     		    header("location: header.php");
     		}
} 

elseif ($row1['name']=="$user_name" && $row1['password']=="$user_pass") 
{
	Print '<script>alert("valid user");</script>'; 
     		    header("location: admin.php");
}


else{
	 Print '<script>alert("Incorrect Username");</script>'; 
     Print '<script>window.location.assign("login.php");</script>'; 
	 } 
} 
?>