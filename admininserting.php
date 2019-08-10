<?php 
	include('config.php');
	class adminfc{

		    public function addsports($name,$description,$picture)
	{
			$database = new cont();
			$con = $database->connect();
			$target = 'image/'.$picture;
			if(move_uploaded_file($_FILES['image']['tmp_name'], $target))
			{
				$sql = "INSERT INTO sports(sports_name,sports_description,sports_image) VALUES('$name','$description','$picture')";
				$result = $con->query($sql);
				if(!$result){
					echo "$con->error";
				}
		        return $result;
	        }
	        else
	        { 
	        	Print '<script>alert("upload failed");</script>'; 
	        	echo " phyco error #".$_FILES["image"]["error"];
	        }
	}

		    public function addvenue($name,$location,$picture,$vdescription,$queryid,$price,$maxplayer )
	{
			$database = new cont();
			$con = $database->connect();
			$target = 'image/'.$picture;
			if(move_uploaded_file($_FILES['vfile']['tmp_name'], $target))
			{
				$sql = "INSERT INTO venue(place,location,venue_image,venue_description,sports_id,price,maximum_players) VALUES('$name','$location','$picture','$vdescription','$queryid','$price','$maxplayer')";
				$result = $con->query($sql);
				if(!$result)
				{
					echo "$con->error";
				}
				else
		        	return $result;
		    }	
		    else
	        { 
	        	Print '<script>alert("upload failed");</script>'; 
	        	echo "Not y".$_FILES["picture"]["error"];
	        }
		
	} 
     
      		public function queryid($sname)
      		{
      			$database = new cont();
			    $con = $database->connect();
      			$query= "SELECT sports_id FROM sports wHERE sports_name ='$sname'";

      			$result = $con->query($query);
      			$row=$result->fetch_assoc();
		        return $row['sports_id'];
		       
      		}

}
	?>