<?php

// start the session
session_start();
$name="";
$address="";


//check the current url for redirections
$url_add = "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];


//condition to know if the button is clicked
if (isset($_REQUEST['login_button'])=== true)
{
	
	//tama ang username at password
	($_REQUEST['form_username']==$name && $_REQUEST['form_address']== $address);
	echo "<div class='alert alert-success' role='alert'> Redirecting...</div>";
	header("Refresh: 3; url=home.php");

	$_SESSION['ses_username']= $name;
}

?>






<!doctype html>
<html lang="en">
  <head>
  	<title>Boac Tour Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="logincss/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Welcome to Boac Tour</h3>
						




					<form method="POST" class="login-form">
		      		<div class="form-group">



		      			<input type="text" class="form-control rounded-left" placeholder="Name" name="form_username" required>
		      			
		      			
		      			
		      			
		      		</div>
	            	<div class="form-group d-flex">
	             		 <input type="text" class="form-control rounded-left" placeholder="Address" name="form_address" required>
	            </div>
	            
	            <div class="form-group">
	            	<button type="submit" class="btn btn-primary rounded submit p-3 px-5" name="login_button">Go to Website</button>
	            </div>
	          </form>






	        </div>
				</div>
			</div>
		</div>
	</section>

  <!--<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script> -->

	</body>
</html>

