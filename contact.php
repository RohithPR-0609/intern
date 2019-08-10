<?php
include("function.php");
$obj = new index();
if (isset($_POST['contact-btn']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$aemail = $_POST['aemail'];
	$comment = $_POST['comment'];

	$object =$obj->comments($name,$email,$number,$aemail,$comment);
	if($object)
	{
		
		header("location: contact.php");
	}
	else
	{
		print '<script>alert("failed! resubmit")</script>';
	}

}
?>

<!DOCTYPE html>
<html>
<head>
<title>contact form</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/header.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<style type="text/css">
	.header a{
		text-decoration: none;
	}
</style>
</head>
<body>

<header>
    <nav>
  <div class="header">
  <a href="#" class="logo">Logo</a>
  <div class="header-right">
    <a href="header.php">Home</a>
     <a href='login.php'>Login</a> 
    <a href='registrations.php'>Sign Up</a>
    <a href="aboutus.php">About Us</a> 
  </div>
</div>
</nav>
</header>

<section class="contact py-5 bg-light" id="contact">
<div class="container">
	<div class="row">
	    <div class="col-md-12">
	        <h4>Get In Touch</h4>
		    <hr>
	    </div>
		<div class="col-md-6">
		    <div class="address">
		        
		    <h5>Address:</h5>
		    <ul class="list-unstyled">
		        <li> AAAAAA ZZZZZ</li>
		        <li> XYZ - 57YYY</li>
		        <li> AREANA, NM 5678-1234</li>
		    </ul>
		    <p>Please don't send anything to this address.</p>
		    </div>
		    <div class="email">
		    <h5>Email:</h5>
		    <ul class="list-unstyled">
		        <li> info@email.com</li>
		        <li> contact@email.com</li>
		    </ul>
		    </div>
		    <div class="phone">
		        <h5>Phone:</h5>
		        <ul class="list-unstyled">
		        <li> +91- 8800XXXXXXYZ</li>
		        <li> +91- 8800XXXXXXBA</li>
		    </ul>
		    </div>
		    <hr>
		    <div class="social">
	        <ul class="list-inline list-unstyled">
	            <li class="list-inline-item">
	                <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
	            </li>
	            <li class="list-inline-item">
	                <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
	            </li>
	            <li class="list-inline-item">
	                <a href="#"><i class="fa fa-youtube-play fa-2x"></i></a>
	            </li>
	        </ul>
	    </div>
		</div>
		<div class="col-md-6">
		    <div class="card">
		        <div class="card-body">
		             <form action="contact.php" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                              <input id="name" name="name" placeholder="Name" class="form-control" type="text">
                            </div>
                            <div class="form-group col-md-6">
                              <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                            </div>
                          </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input id="number" name="number" placeholder="Mobile No." class="form-control" required="required" type="text">
                            </div>
                            <div class="form-group col-md-6">
                              <input id="aemail" name="aemail" placeholder="Alternative Email" class="form-control" required="required" type="email">
                            </div>
                       
                            <div class="form-group col-md-12">
                            <textarea id="comment" name="comment" cols="40" rows="5" placeholder="Your Message"class="form-control"></textarea>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <button type="submit" id="contact-btn" name="contact-btn" class="btn btn-danger">Submit</button>
                        </div>
                    </form>
		        </div>
		    </div>
		</div>
	</div>
</div>
</section>

<footer>
  <div class="navbar" id="myNavbar">
  <a href="contact.php">Contact</a>
</div>
</footer>

</body>
</html>