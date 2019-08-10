<?php
include('config.php');
$city = $_POST['city'];
$db = new cont();
$conn = $db->connect();
$sql= "select * from venue where venue_id='$city'";
$query = $conn->query($sql);
echo '<option value="">Select location</option>';
while($res = $query->fetch_assoc()){
echo '<option value="'.$res['venue_id'].'">'.$res['location'].'</option>';
	
}
?>