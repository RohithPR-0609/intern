<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	
	<style type="text/css">
		@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
		section{
			padding: 60px 0;
		}
		section .section-title{
			text-align:center;
			color:#007b5e;
			margin-bottom:50px;
			text-transform:uppercase;
		}
		#what-we-do{
			background:#ffffff;
		}
		#what-we-do .card{
			padding: 1rem!important;
			border: none;
			margin-bottom:1rem;
			-webkit-transition: .5s all ease;
			-moz-transition: .5s all ease;
			transition: .5s all ease;
		}
		#what-we-do .card:hover{
			-webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
			-moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
			box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
		}
		#what-we-do .card .card-block{
			padding-left: 50px;
		    position: relative;
		}
		#what-we-do .card .card-block a{
			color: #007b5e !important;
			font-weight:700;
			text-decoration:none;
		}
		#what-we-do .card .card-block a i{
			display:none;
			
		}
		#what-we-do .card:hover .card-block a i{
			display:inline-block;
			font-weight:700;
			
		}
		#what-we-do .card .card-block:before{
			font-family: FontAwesome;
		    position: absolute;
		    font-size: 39px;
		    color: #007b5e;
		    left: 0;
			-webkit-transition: -webkit-transform .2s ease-in-out;
		    transition:transform .2s ease-in-out;
		}
		#what-we-do .card .block-1:before{
		    content: "\f0e7";
		}
		#what-we-do .card .block-2:before{
		    content: "\f0eb";
		}
		#what-we-do .card .block-3:before{
		    content: "\f00c";
		}
		#what-we-do .card .block-4:before{
		    content: "\f209";
		}
		#what-we-do .card .block-5:before{
		    content: "\f0a1";
		}
		#what-we-do .card .block-6:before{
		    content: "\f218";
		}
		#what-we-do .card:hover .card-block:before{
			-webkit-transform: rotate(360deg);
			transform: rotate(360deg);	
			-webkit-transition: .5s all ease;
			-moz-transition: .5s all ease;
			transition: .5s all ease;
		}
				
	</style>

</head>
<body>

	  <nav>
<div class="header">
  <a href="#" class="logo">Logo</a>
  <div class="header-right">
    <a class="active" href="header.php">Home</a>
    <a href="aboutus.php">About Us</a>
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
</nav>


	<main>
	<section id="what-we-do">
		<div class="container-fluid">
			<h2 class="section-title mb-2 h1">What We Do</h2>
			<p class="text-center text-muted h5">Design Develop Deploy!! Marketing strategy is crucial in a fast moving market</p>
			<div class="row mt-5">
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<div class="card">
						<div class="card-block block-1">
							<h3 class="card-title">Special title</h3>
							<p class="card-text">With supporting text below lead-in to additional content.</p>
							<a href="javascript:void();" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<div class="card">
						<div class="card-block block-2">
							<h3 class="card-title">Special title</h3>
							<p class="card-text">With supporting text below lead-in to additional content.</p>
							<a href="javascript:void();" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<div class="card">
						<div class="card-block block-3">
							<h3 class="card-title">Special title</h3>
							<p class="card-text">With supporting text below lead-in to additional content.</p>
							<a href="javascript:void();" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<div class="card">
						<div class="card-block block-4">
							<h3 class="card-title">Special title</h3>
							<p class="card-text">With supporting text below lead-in to additional content.</p>
							<a href="javascript:void();" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<div class="card">
						<div class="card-block block-5">
							<h3 class="card-title">Special title</h3>
							<p class="card-text">With supporting text below lead-in to additional content.</p>
							<a href="javascript:void();" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<div class="card">
						<div class="card-block block-6">
							<h3 class="card-title">Special title</h3>
							<p class="card-text">With supporting text below lead-in to additional content.</p>
							<a href="javascript:void();" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</section>
	
    <!-- 
    <footer>
<div class="navbar" id="myNavbar">
  <a href="contact.php">Contact</a>
</div>
</footer> -->

</body>
</html>