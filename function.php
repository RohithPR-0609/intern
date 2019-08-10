<?php
include('config.php');
	class index{
		public function fetchsports(){
			$db = new cont();
			$conn = $db->connect();
			$sql = "SELECT * FROM sports";
			$result = $conn->query($sql);
			return $result;
		}

       public function specific_sports($sports_id)
       {
			$db = new cont();
		$conn = $db->connect();
		$sql = "SELECT * FROM sports WHERE sports_id = '$sports_id'";
			$result = $conn->query($sql);
		return $result;
	}

	 public function place($sid)
    {
			$db = new cont();
		$conn = $db->connect();
		$sql = "SELECT * FROM venue WHERE sports_id = '$sid' GROUP BY place";
			$result = $conn->query($sql);
		return $result;
	}

   public function move_venue($vid)
    {
    	header("location: venue.php?id=".$vid);
	}

 	 public function particular_venue($vid)
    {
			$db = new cont();
		$conn = $db->connect();
		$sql = "SELECT * FROM venue WHERE venue_id = '$vid'";
			$result = $conn->query($sql);
		return $result;
	}

	public function booking($lid,$sid,$vid,$number,$team,$time,$date,$max)
    {       $db = new cont();
			$conn = $db->connect(); 

			  $bsa="SELECT SUM(team_a) FROM booked WHERE time='$time' AND date='$date'";
    		  $bs=$conn->query($bsa);
        	  $b=$bs->fetch_assoc();
        	  $asa=$max-$b['SUM(team_a)'];

        	  $bsb="SELECT SUM(team_b) FROM booked WHERE time='$time' AND date='$date'";
    		  $bs1=$conn->query($bsb);
        	  $b1=$bs1->fetch_assoc();
        	  $asb=$max-$b1['SUM(team_b)'];


		
		$teama='teamA';

        if($teama==$team)
        {
        	$one="SELECT SUM(team_a) FROM booked WHERE time='$time' AND date='$date'";
        	$two=$conn->query($one);
        	$row=$two->fetch_assoc();
        	$three=$row['SUM(team_a)'];
        	if($three>0)
        	{}
        	else
        	{
        		$three=0;
        	}
        	if($three+$number<=$max)
        	{
        		if($three!=$max&&$three<$max)
        		{
					$sql = "INSERT INTO booked(user_id,sports_id,venue_id,team_a,time,date) VALUES('$lid','$sid','$vid','$number','$time','$date')";
					$result = $conn->query($sql);
					return $result;
				}
			}
			else
			{
				Print '<script>alert("'.$asa.' no of slots available");</script>';
				
 			}
		}
		else
		{
		 	$one="SELECT SUM(team_b) FROM booked WHERE time='$time' AND date='$date'";
		 	$two=$conn->query($one);
        	$row=$two->fetch_assoc();
        	$three=$row['SUM(team_a)'];
	        	if($three>0)
	        	{}
	        	else
	        	{
	        		$three=0;
	        	}
	        	if($three+$number<=$max)
	        	{
	        		if($three!=$max&&$three<$max)
	        		{
						$sql = "INSERT INTO booked(user_id,sports_id,venue_id,team_b,time,date) VALUES('$lid','$sid','$vid','$number','$time','$date')";
						$result = $conn->query($sql);
						return $result;
					}
				}
					else
					{
						 Print '<script>alert("'.$asb.' no of slots available");</script>';
						
 				     }
 			
		}
}

	 public function book($uid)
    {
			$db = new cont();
		$conn = $db->connect();
		$sql = "SELECT * FROM booked WHERE user_id = '$uid' order by id desc";
			$result = $conn->query($sql);
		return $result;
	}

	 public function comments($name,$email,$number,$aemail,$comment)
    {
			$db = new cont();
		$conn = $db->connect();
		$sql = "INSERT INTO message(name,email,number,aemail,msg) VALUES('$name','$email','$number','$aemail','$comment')";
			$result = $conn->query($sql);
			echo "$result";
		return $result;
	}

	 public function view_booking()
    {
			$db = new cont();
		$conn = $db->connect();
		$sql = "SELECT * FROM booked";
		$result = $conn->query($sql);
		return $result;
	}

	

}

?>