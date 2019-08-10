<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	 <nav>
<div class="header">
  <a href="#" class="logo">Logo</a>
  <div class="header-right">
    <a class="active" href="header.php">Home</a>
    <a href="login.php">Login</a>
    <a href="registrations.php">Sign Up</a>
    <a href="aboutus.php">About Us</a>
  </div>
</div>
</nav>
	<main>
	<center>
	<div class="login">
		<h2>LOGIN</h2>
		<form action="register.php" method="post">
			<input type="email" id="email" name="email" placeholder="Enter Email" required="">
			<input type="password" id="password" name="password" placeholder="Enter password" required="">
			<input type="submit" name="login" value="LOGIN"><br>
			<a class="user" href="registrations.php">To register</a>
		</form>	
	</div></center>
</main>
<footer>
<div class="navbar" id="myNavbar">
  <a href="contact.php">Contact</a>
</div>
</footer>
</body>
</html>