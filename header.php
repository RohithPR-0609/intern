<?php 
	include("function.php");
	$fetchdata = new index();
	$sql = $fetchdata->fetchsports();
  
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/header.css">
<link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>

  <nav>
<div class="header">
  <a href="#" class="logo">Logo</a>
  <div class="header-right">
    <a class="active" href="header.php">Home</a>
    
    <?php 
    session_start();
    if(isset($_SESSION['login_name']))
    {
      echo "<a href='aboutus.php'>About Us</a>
      <a href='logout.php'>Logout</a>";


    }
  else  {
    echo"
     <a href='login.php'>Login</a>
    <a href='registrations.php'>Sign Up</a>
     <a href='aboutus.php'>About Us</a>";
}
    ?>
  </div>
</div>
</nav>

<div class="main">
	<?php while($row = $sql->fetch_assoc()){ ?>
    <a href="sports.php?id=<?php echo $row['sports_id'];?>">
    	<div class="coloum1" ><img src="image/<?php echo $row['sports_image'];?>" >
    		<?php echo $row['sports_name'];?></div></a>
    		<?php } ?>





  <!--  <a href="#"><div class="coloum2"><img src="image/cri.jpg" >CRICKET</div></a>
    <a href="#"><div class="coloum3"><img src="image/hockey1.jpg" >HOCKEY</div></a>
    <a href="#"><div class="coloum4"><img src="image/kabaddi.png" >KABADDI</div></a>-->
  </div>


<footer>
<div class="navbar" id="myNavbar">
  <a href="contact.php">Contact</a>
</div>
</footer>


</body>
</html>

