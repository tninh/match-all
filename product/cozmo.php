<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>HROBOTER</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="cusStyles.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <h1 class="text-primary">HROBOTER</h1>
	<div class="container">
		<div class="row">
			<div class= "col-xs-14">
				<a href="../home.php" class="btn btn-primary btn-lg" role="button" >Home</a>
				<a href="../products.php" class="btn btn-success btn-lg" role="button">Products</a>
				<a href="../news.php" class="btn btn-primary btn-lg" role="button">News</a>
				<a href="../about.php" class="btn btn-primary btn-lg" role="button">About</a>
				<a href="../contacts.php" class="btn btn-primary btn-lg" role="button">Contacts</a>
				<a href="../user.php" class="btn btn-primary btn-lg" role="button">User</a>
			</div>
		</div>
	</div>
	<div>
	</div>
	<div class="container">
		
		<a class="btn btn-default pull-right" href="secure.php" style = "height:40px; width:120px" >SignUp</a>
		<a class="btn btn-default pull-right " href="secure.php"  style = "height:40px; width:120px">Login</a>
			
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h3>Items</h3>
			</div>

			<div class="col-lg-3 col-md-4 col-sm-6">
				<a class=" img-responsive thumbnail" >
					<p><span class="h4">Cozmo</span>  -  price: $175</p>
					<img src="../photos/cozmo.jpg">
				</a>
			</div>
			
		</div>
			
		<div class="row">
			<p> Cozmo is a real-life robot like you've only seen in movies, with a one-of-a-kind personality that evolves the more you hang out. </br>	
			Cozmo expresses real emotions in response to your actions  </br>
			Requires a free app and the processing power of your compatible mobile phone/tablet to access high level robotics functions that brings Cozmo to life.  </br>
			New games and upgrades are unlocked the more you play. Durability and security have been rigorously tested.  </br>
			The Cozmo SDK Beta is a connected robotics platform for makers, hobbyists, educators and researchers.   </br>
			</p>
		</div>
		
	</div>
	
	<?php
		
		$robotID = "cozmo";
		$sizeNext = $_COOKIE[$robotID ] + 1;
	
		// write to cookie
		setcookie( $robotID,  $sizeNext , time() + 4320000);
	?>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
 