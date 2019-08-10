<?php 
session_start();
  include("function.php");
  $fetchdata = new index();
  $vid=$_GET['id'];
  $sql = $fetchdata->particular_venue($vid);
  $row =mysqli_fetch_array($sql);
  $uid= $_SESSION['login_id'];
  $sql1=$fetchdata->book($uid);
  $row1 =mysqli_fetch_array($sql1);
?>
<!DOCTYPE html>
<html>
<head>
	<title>payment</title>
	<link rel="stylesheet" type="text/css" href="css/sucess.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css' integrity='sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/' crossorigin='anonymous'>
</head>
<body>

	  <nav>
<div class="header">
  <a href="#" class="logo">Logo</a>
  <div class="header-right">
    <a class="active" href="header.php">Home</a>
    <a href="aboutus.php">About Us</a>
     <?php 
    
    if(isset($_SESSION['login_name']))
    {
      echo "<a href='contact.php'>feedback</a>";
      echo "<a href='logout.php'>Logout</a>";

    }
  else  {
    echo"
     <a href='login.php'>Login</a>
    
    <a href='registrations.php'>Sign Up</a>";
}
    ?>
  </div>
</div>
</nav>


	<main><center>
		<div class="pay">
			<h2>payment succesfull</h2>
			<i class='far fa-thumbs-up' style='font-size:48px;color:red'></i>
		</div>		
	</center>

 		 <div class="invoice">
 		 <div class="class"><span >Name : <?php echo $_SESSION['login_name'];?></span><br>
              <span>Time : <?php echo $row1['time'] ?></span><br></div>

          <div class="id"> <span>Date : <?php echo $row1['date'] ?></span><br>
                <span>Payment #: 0<?php echo $row1['id'] ?></span><br></div>

             <center><span>INVOICE</span></center>
             <hr>
              <p class="final">City : <?php echo $row['place'] ?></p>
              <p class="final">Venue : <?php echo $row['location'] ?></p>
              <p class="final">Number of slots : <?php echo $row1['team_a']; echo $row1['team_b']; ?></p>
              <p class="final">Amount : <?php echo $row['price'] ?>/player</p>
              <div class="qr"><img src="image/qr.jpg"></div>
            <center><span >THANK YOU FOR BOOKING</span><br></div></center>
            </div>
	</main>
    
    <footer>
<div class="navbar" id="myNavbar">
  <a href="contact.php">Contact</a>
</div>
</footer>

</body>
</html>