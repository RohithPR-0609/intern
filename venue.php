<?php 
  session_start();
  include("function.php");
  $fetchdata = new index();
  $vid=$_GET['id'];
  $lid=$_SESSION['login_id'];
  $sql = $fetchdata->particular_venue($vid);
  $row =mysqli_fetch_array($sql);
  $sid= $row['sports_id'];
  $vaid= $row['venue_id'];
  $max=$row['maximum_players'];

  if(isset($_SESSION['login_name']))
 	{

  if(isset($_POST['book'])!='')
  {
    
 $number = $_POST['number'];
    $time = $_POST['time'];
    $date = $_POST['day'];
    $team = $_POST['team'];
    $result = $fetchdata->booking($lid,$sid,$vaid,$number,$team,$time,$date,$max);
    if($result)
    {
      // Print '<script>alert("booked successfully");</script>';
       header("location: sucess.php?id=".$vaid);
      
    }
    else
    {
   Print '<script>alert("booking failed");</script>';
    }
  }
}
else
{
	 header("location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>venue page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/venue.css">
  <link rel="stylesheet" type="text/css" href="css/header.css">
</head>
<body>
   <header>
    <nav>
  <div class="header">
  <a href="#" class="logo">Logo</a>
  <div class="header-right">
    <a href="header.php">Home</a>
    <a href="aboutus.php">About Us</a>
    <?php 
  
    if(isset($_SESSION['login_name']))
    {
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
</header>
  <div class="sport">
    
  <h2 ><?php echo $row['location'];?></h2>
  <img src="image/<?php echo $row['venue_image']; ?>">
    </div>
     <div  class="sport-para">
      <p>
        <?php echo $row['venue_description']; ?>
      </p>
     </div>
   
  <div class="number1">
   <form action="venue.php?id=<?php echo $row['venue_id'];?>" method="post">
       
       <div class="max1">choose number
        <input type="number" name="number" max="<?php echo $row['maximum_players'] ?>" min="1"></div>
       
       <div class="max2">
          <input type="radio" name="team" value="teamA" checked> teamA<!-- (<?php echo $row['maximum_players'] ?>) --><br>
        <input type="radio" name="team" value="teamB"> teamB<!-- (<?php echo $row['maximum_players'] ?>) --><br>
         (Select Team)
        </div>
    
       <div class="max4"> Time:<select name="time">
        <option value="">Select Time </option>
          <option  value="8-11 AM">8-to-11</option>
          <option value="3-6 PM">3-to-6</option>
          <option value="7-10 PM">7-to-10</option>
       </select>
        Date:<input type="date" name="day"></div>

         <div class="max3">Cost:<input type="text" name="cost" value="<?php echo $row['price']; ?>"></div>

      <div class="max5"> <input  type="submit" name="book" class="choose" value="Book Now"></div>
   
     </form>
     </div>
    <footer>
  <div class="navbar" id="myNavbar">
  <a href="contact.php">Contact</a>
</div>
</footer>

</body>
</html>


