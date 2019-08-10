<?php 
  include("function.php");
  $fetchdata = new index();
  $sid=$_GET['id'];
  $sql = $fetchdata->specific_sports($sid);
  $row =mysqli_fetch_array($sql);

  $sql1 = $fetchdata->place($sid);
  
  if(isset($_POST['submit-option']))
   {   
    $vid=$_POST['state'];
    $fetchdata->move_venue($vid);
  
 }
?>

<!DOCTYPE html>
<html>
<head>
	<title>conent page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/sports.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script type="text/javascript">
    function change_city()
{
  var city = $("#city").val();
    
     $.ajax({
    type: "POST",
    url: "state.php",
    data: "city="+city,
    cache: false,
    success: function(response)
      {
          
        $("#state").html(response);
      }
      });
  
}
  </script>



</head>
<body>
   <header>
	<div class="header">
  <a href="#" class="logo">Logo</a>
  <div class="header-right">
    <a  href="header.php">Home</a>
    <a href="aboutus.html">About Us</a>
    <?php 
    session_start();
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
</header>
	<div class="sport">
	<h2 ><?php echo $row['sports_name']  ?></h2>
	<img src='image/<?php echo $row['sports_image'] ?>'>
    </div>
     <div  class="sport-para">
     	<p>
           <?php echo $row['sports_description']  ?>
     	</p>
     </div>
   
    <spam class="line"> select place and venue:</spam>
     <form action="sports.php" method="post">
     <div class="check-box">
     
       <select name="city" id="city" class="select-style" onchange="change_city();">
        <option value="">Select City</option>
        <?php while($row = $sql1->fetch_assoc()){ ?>
      <option value="<?php echo $row['venue_id'] ?>"><?php echo $row['place'] ?></option>
    <?php } ?>
      </select><br><br>

<select name="state" id="state" class="select-style">
</select>

   

      <div class="sport-submit">
      	<input type="submit" name="submit-option">
      </div>
       </div>
     </form>

  <footer>
  <div class="navbar" id="myNavbar">
  <a href="contact.php">Contact</a>
</div>
</footer>

</body>
</html>