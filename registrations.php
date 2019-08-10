<!DOCTYPE html>
<html>
<head>
	<title>registeration</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
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
	<h1 class="header-register">REGISTER</h1>
	<form action="checkregister.php" method="post">
		<input type="text" name="user-name" placeholder="Enter name" required="" >
		<input type="email" name="email" placeholder="Enter email" required="">
		<input type="password" name="password" placeholder="Enter password" required="">
		<input type="text" name="number" placeholder="Enter number" required="">
		<input type="submit" name="registrations" value="SUBMIT">
		<div  class="reg"><a href="login.php">REGISTERED USER</a><div>

	</form>
    </main>

    <footer>
<div class="navbar" id="myNavbar">
  <a href="contact.php">Contact</a>
</div>
</footer>

</body>
</html>