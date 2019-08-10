        <?php

	   
	    session_start();

		$server = 'localhost';
		$username = 'root';
		$pass = '';
		$db = 'intern_project';
		$mysqli = new mysqli($server, $username, $pass, $db) or die ("Failed to connect");

	    $username = $_POST['email'];
	    $password = $_POST['password'];

		if($username == "admin@gmail.com" and $password == "admin")
	    {
		header("location: admin.php");
     	}
		
     	elseif (isset($_POST['login']))
     	
		{
		$username = trim($_POST['email']);
		$password = trim($_POST['password']);
		$query = "SELECT email, password FROM user_reg WHERE email='$username' 
		AND password='$password'";

		$result = mysqli_query($mysqli,$query)or die(mysqli_error($query));
		$num_row = mysqli_num_rows($result);
		$row=mysqli_fetch_array($result);
		if( $num_row ==1 )
		     {
		 $_SESSION['user_id']=$row['user_id'];
		 header("Location: header.php");
		 Print '<script>alert("valid user");</script>'; 
		 exit;
			}
		
		else
    	{
	    Print '<script>alert("Incorrect Username");</script>'; 
		Print '<script>window.location.assign("login.php");</script>'; 
		}
	      }
        ?>