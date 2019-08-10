<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/header.css">
<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>

<body>

  <nav>
<div class="header">
  <a href="#" class="logo">Admin Dashboard</a>
  <div class="header-right">
    <a href="admin.php">Add Sports</a>
    <a href="Admin1.php">Add Venue</a>
    <a href="viewadmin.php">bookings</a>
    <a href="header.php">logout</a>

  </div>
</div>
</nav>

<main><center>

  <div class="admin">
    <h2>Insert Sport</h2>
    <form action="admin.php" method="post" enctype="multipart/form-data">
      <input type="text" name="sname" placeholder="Enter sport name" required="">
      <input type="text" name="sdescription" maxlength="1000" placeholder="Enter sport description" required=""><br><br>
     <span >Select a image file :</span> <input type="file" name="image">
     <input type="submit" name="add" value="Add sport">
     
    </form> 
  </div>
  </center>
</main>


<footer>
<div class="navbar" id="myNavbar">
  <a href="#">Contact</a>
</div>
</footer>
</body>
</html>


<?php 
  include_once('admininserting.php');

  $admin = new adminfc();
  
  if(isset($_POST['add'])!='')
  {
    $name = $_POST['sname'];
    $description = $_POST['sdescription'];
    $picture = $_FILES['image']['name']; 
    $result = $admin->addsports($name,$description,$picture);
    if($result)
    {
      Print '<script>alert("uploaded successfully");</script>';
      Print '<script>window.location.assign("admin.php");</script>';
    }
    else
    {
   Print '<script>alert("uploaded failed");</script>';
   echo "y error";
    }
  }

?>