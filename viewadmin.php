<?php 
  include("function.php");
  $object = new index();
  $obj = $object->view_booking();

?>
<!DOCTYPE html>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/header.css">
<link rel="stylesheet" type="text/css" href="css/admin.css">

<script type="text/javascript">
  $(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</head>
<body>

  <nav>
<div class="header">
  <a href="#" class="logo">Logo</a>
  <div class="header-right">
    <a class="active" href="header.php">Home</a>
     <a href="admin.php">Add Sports</a>
    <a href="Admin1.php">Add Venue</a>
    <a href="viewadmin.php">bookings</a>
    <a href="logout.php">logout</a>
   
  </div>
</div>
</nav>

    <main>
      <span class="title">Booking View</span><br><br>

<input id="myInput" class="searching" type="text" placeholder="Search..">
<br><br>

<table>
  <thead>
    <tr>
      <th># Id</th>
      <th>User Id</th>
      <th>sports Id</th>
      <th>Venue Id</th>
      <th>Team A</th>
      <th>Team B</th>
      <th>Time</th>
      <th>Date</th>
    </tr>
  </thead>
  <tbody id="myTable">
  <?php
                    while ($row = mysqli_fetch_array($obj)) 
                     {
                        echo'<tr">';
                        echo '<td>'.$row['id'].'</td>';
                        echo '<td>'.$row['user_id'].'</td>';
                        echo '<td>'.$row['sports_id'].'</td>';
                        echo '<td>'.$row['venue_id'].'</td>';
                        echo '<td>'.$row['team_a'].'</td>';
                        echo '<td>'.$row['team_b'].'</td>';
                        echo '<td>'.$row['time'].'</td>';
                        echo '<td>'.$row['date'].'</td>';  
                        echo '</tr>';
                     }
    
   ?>
  </tbody>
</table>
    </main>


<footer>
<div class="navbar" id="myNavbar">
  <a href="contact.php">Contact</a>
</div>
</footer>


</body>
</html>

