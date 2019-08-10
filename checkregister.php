<?php
$name=$_POST['user-name'];
$email=$_POST['email'];
$password=$_POST['password'];
$number=$_POST['number'];

$conn= new mysqli("localhost","root","","intern_project") or die("failed:" . mysqli_connect_error());


if(isset($_POST['registrations']))
	$sql = "INSERT INTO user_reg (user_name, email, password,phone_number) VALUES ('$name','$email','$password','$number')";
else
{
 Print '<script>alert("not registered!! try again");</script>'; 
 header('location:/intern/registrations.html');
}


if ($conn->query($sql) === TRUE) {
	header('location:/intern/login.html');
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>















?>