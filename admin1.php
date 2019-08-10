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
    <h3>Insert Venue</h3>
    <form action="admin1.php" method="post"  enctype="multipart/form-data">
      <input type="text" name="place" placeholder="Enter place" required="">  
      <input type="text" name="location" placeholder="Enter location" required="">  
      <input type="file" name="vfile">
      <input type="text" name="vdescription" maxlength="1000" placeholder="Enter venue description" required="">
      <input type="text" name="sname" placeholder="Enter sport name" required="">
      <input type="text" name="price" placeholder="Enter price" required="">
      <input type="text" name="max-player" placeholder="Enter number of players" required="">
      <input type="submit" name="add1" value="Add Venue">
     
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
  
  if(isset($_POST['add1']))
  {
    $name = $_POST['place'];
    $location = $_POST['location'];
    $picture = $_FILES['vfile']['name']; 
    $vdescription = $_POST['vdescription'];
    $sname = $_POST['sname'];
    $price = $_POST['price'];
    $maxplayer = $_POST['max-player'];
   

    $query = $admin->queryid($sname);
   
 
    $result = $admin->addvenue($name,$location,$picture,$vdescription,$query,$price,$maxplayer);
    if($result)
    {
      Print '<script>alert("uploaded successfully");</script>';
      Print '<script>window.location.assign("admin1.php");</script>';
    }
    else
    {
   Print '<script>alert("uploaded failed");</script>';
   echo "y error";
    }
  }

?>